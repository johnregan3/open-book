<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Book;
use App\Models\Chapter;
use App\Models\Verse;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		if (env('APP_ENV') === 'local') {
			User::create([
				'name'     => env('ADMIN_USER_NAME', 'admin'),
				'email'    => env('ADMIN_USER_EMAIL', 'admin@local.test'),
				'password' => bcrypt(env('ADMIN_USER_PASSWORD', 'password')),
			]);
		}

		$json_array = file_get_contents(__DIR__ . '/../json/bible.json');
		$books = json_decode($json_array, true);
		$book_order = 1;
		foreach ($books as $book) {
			foreach ($book as $book_name => $chapters) {
				$book_slug = Str::slug($book_name, '-');
				$book = Book::create([
					'order' => $book_order,
					'name' => $book_name,
					'slug' => $book_slug,
				]);

				$book_order++;
				foreach ($chapters as $chapter_number => $verses) {
					$chapter = Chapter::create([
						'number' => intval($chapter_number),
						'book_id' => $book->id,
					]);
					foreach ($verses as $verse_number => $verse_text) {
						Verse::create([
							'number' => intval($verse_number),
							'text' => $verse_text,
							'chapter_id' => $chapter->id,
						]);
					}
				}
			}
		}
	}
}
