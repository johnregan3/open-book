<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Verse;

class Chapter extends Model
{
    use HasFactory;

	protected $fillable = [
		'order',
		'name',
		'slug',
		'book_id',
	];

	public function book()
	{
		return $this->belongsTo(Book::class);
	}

	public function verses()
	{
		return $this->hasMany(Verse::class);
	}
}
