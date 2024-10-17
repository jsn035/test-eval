<?php

namespace App\Http\Controllers;

use App\Models\Trending;
use Illuminate\Http\Request;

class TrendingsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$trendings
			= Trending::paginate('9');

		return view('trendings.index', compact(
			'trendings',
		));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Trending $trending)
	{
		return view('trendings.show', compact(
			'trending',
		));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Trending $trending)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Trending $trending)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Trending $trending)
	{
		//
	}
}
