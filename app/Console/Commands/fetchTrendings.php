<?php

namespace App\Console\Commands;

use App\Models\Trending;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class fetchTrendings extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:fetch-trendings';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		/** @var string $url */
		$url
			= 'https://api.themoviedb.org/3/trending/all/week';
		/** @var string $token */
		$token
			= 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo';

		/** @var \Illuminate\Http\Client\Response $response */
		$response
			= Http::withHeaders([
				'Accept' => 'application/json',
			])
			->withToken($token)
			->get($url, [
				'language' => 'fr-FR',
				'region' => 'FR'
			])
			->throw();

		/** @var mixed $json */
		$json
			= $response
			->json();

		DB::table('trendings')
			->truncate();

		foreach (($json['results'] ?? []) as $result) {
			try {
				if (!isset($result['title']))
					throw new \RuntimeException("Entry #{$result['id']} has no defined title.");
				if (!isset($result['original_title']))
					throw new \RuntimeException("Entry #{$result['id']} has no defined original_title.");

				$trending
					= Trending::create([
						'id' => $result['id'],
						'title' => $result['title'],
						'original_title' => $result['original_title'],
						'overview' => $result['overview'],
						'poster_path' => $result['poster_path'],
						'media_type' => $result['media_type'],
						'adult' => $result['adult'],
						'original_language' => $result['original_language'],
						'popularity' => $result['popularity'],
						'vote_average' => $result['vote_average'],
						'vote_count' => $result['vote_count']
					]);
			} catch (\Throwable $th) {
				$this->warn($th->getMessage());
			}
		}
	}
}
