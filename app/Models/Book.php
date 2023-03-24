<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;

/**
 * App\Models\Book
 *
 * To get all of a book's chapters and verses, use $book->load('chapters.verses').
 */
class Book extends Model
{
    use HasFactory;

	protected $fillable = [
		'order',
		'name',
		'slug',
	];

	public function chapters()
	{
		return $this->hasMany(Chapter::class);
	}
}
