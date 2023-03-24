<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('verses', function (Blueprint $table) {
			$table->id();
			$table->foreignId('chapter_id')->constrained()->cascadeOnDelete();
			$table->integer('number');
			$table->text('text');
			$table->foreignId('passage_id')->nullable()->constrained();
			$table->foreignId('embedding_id')->nullable()->constrained();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('verses');
	}
};
