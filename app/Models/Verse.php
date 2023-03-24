<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Passage;
use App\Models\Embedding;
use App\Models\Topic;
use App\Models\Chapter;

/**
 * App\Models\Verse
 *
 * to get a Verse's Book, use $verse->chapter->book.
 */
class Verse extends Model
{
    use HasFactory;

	protected $fillable = [
		'chapter_id',
		'number',
		'text',
		'passage_id',
		'embedding_id',
	];

	public function chapter()
	{
		return $this->belongsTo(Chapter::class);
	}

	public function passage()
	{
		return $this->belongsTo(Passage::class);
	}

	public function embedding()
	{
		return $this->morphOne(Embedding::class, 'embeddable');
	}

	public function topics()
	{
		return $this->belongsToMany(Topic::class);
	}
}
