<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Verse;
use App\Models\Passage;
use App\Models\Embedding;

class Topic extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'slug',
		'embedding_id',
	];

	public function verses()
    {
        return $this->hasMany(Verse::class);
    }

	public function passages()
	{
		return $this->hasMany(Passage::class);
	}

	public function embedding()
	{
		return $this->morphOne(Embedding::class, 'embeddable');
	}
}
