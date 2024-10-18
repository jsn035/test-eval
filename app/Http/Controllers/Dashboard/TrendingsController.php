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
		Trending::create($request->validated());

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
		$trending->update($request->validated());

		return redirect('/dashboard/trendings');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Trending $trending)
	{
		$trending->delete();

		return redirect('/dashboard/trendings');
	}
}
