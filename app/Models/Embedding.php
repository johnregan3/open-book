<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\Vector;

class Embedding extends Model
{
    use HasFactory;

	protected $casts = [
		'embedding' => Vector::class
	];

	protected $fillable = [
		'embedding',
		'embeddable_id',
		'embeddable_type',
	];

	public function embeddable()
	{
		return $this->morphTo();
	}
}
