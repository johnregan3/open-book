<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;
use App\Models\Verse;
use App\Models\Embedding;

class Passage extends Model
{
    use HasFactory;

	protected $fillable = [
		'verse_id',
		'embedding_id',
	];


	public function verses()
	{
		return $this->hasMany(Verse::class);
	}

	public function embeddings()
	{
		return $this->morphOne(Embedding::class, 'embeddable');
	}

	public function topics()
	{
		return $this->hasMany(Topic::class);
	}
}
