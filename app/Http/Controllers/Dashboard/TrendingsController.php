<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\StoreTrendingRequest;
use App\Http\Requests\Dashboard\UpdateTrendingRequest;
use App\Models\Trending;
use Illuminate\Http\Request;

class TrendingsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$trendings = Trending::all();

		return view(
			'dashboard.trendings.index',
			compact('trendings')
		);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('dashboard.trendings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreTrendingRequest $request)
	{
		try {
			Trending::insert([
				'title'             => $request->get('title', ''),
				'original_title'    => $request->get('original_title', ''),
				'media_type'        => $request->get('media_type', ''),
				'original_language' => $request->get('original_language', ''),
				'overview'          => $request->get('overview', ''),
				'poster_path'       => $request->get('poster_path', ''),
				'popularity'        => $request->get('popularity', ''),
				'vote_average'      => $request->get('vote_average', ''),
				'vote_count'        => $request->get('vote_count', ''),
				'adult'             => false,
			]);

			$request->session()->flash('flash.banner', 'Le Trending à été enregistré.');
			$request->session()->flash('flash.bannerStyle', 'success');
		} catch (\Throwable $th) {
			$request->session()->flash('flash.banner', $th->getMessage());
			$request->session()->flash('flash.bannerStyle', 'danger');
		}

		return redirect('/dashboard/trendings');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Trending $trending)
	{
		return view(
			'dashboard.trendings.show',
			compact('trending')
		);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Trending $trending)
	{
		return view(
			'dashboard.trendings.edit',
			compact('trending')
		);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateTrendingRequest $request, Trending $trending)
	{
		try {
			$trending
				->updateOrFail($request->all());

			$request->session()->flash('flash.banner', 'Le Trending à été enregistré.');
			$request->session()->flash('flash.bannerStyle', 'success');
		} catch (\Throwable $th) {
			$request->session()->flash('flash.banner', $th->getMessage());
			$request->session()->flash('flash.bannerStyle', 'danger');
		}

		return redirect('/dashboard/trendings');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Request $request, Trending $trending)
	{
		try {
			$trending->delete();

			$request->session()->flash('flash.banner', 'Le Trending à été supprimé.');
			$request->session()->flash('flash.bannerStyle', 'success');
		} catch (\Throwable $th) {
			$request->session()->flash('flash.banner', $th->getMessage());
			$request->session()->flash('flash.bannerStyle', 'danger');
		}

		return redirect('/dashboard/trendings');
	}
}
