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
		Schema::create('trendings', function (Blueprint $table) {
			$table
				->bigInteger('id')
				->primary();

			$table
				->string('title');

			$table
				->string('original_title');

			$table
				->text('overview');

			$table
				->string('poster_path');

			$table
				->string('media_type');

			$table
				->boolean('adult');

			$table
				->char('original_language', 2);

			$table
				->float('popularity');

			$table
				->float('vote_average');

			$table
				->integer('vote_count');

			$table
				->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('trendings');
	}
};
