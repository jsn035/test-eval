@extends('layouts/front')

@section('content')
<section id="trendings" class="my-3">

	<!-- search -->
	 <div class="container">
		<div class="container bg-body py-3 border rounded">
			<form action="{{ url("/trendings") }}" method="GET" class="text-end">
				<input type="text" name="search" class="form-control d-inline-block w-auto" placeholder="Rechercher" value="{{ $search }}">
				<button type="submit" class="btn btn-primary">&rarr;</button>
			</form>
		</div>
	 </div>

	<!-- trendings -->
	<div class="container my-3">
		<div class="row row-cols-3 g-3">
			@foreach($trendings->items() as $item)
			<div class="col">
				<div class="px-3 bg-body text-center border rounded">
					<!-- title -->
					<h1 class="fs-3 my-3 text-nowrap"><a href="{{ url("/trendings/{$item->id}") }}">{{ $item->title }}</a></h1>

					<!-- poster -->
					<div class="my-3">
						<a href="{{ url("/trendings/{$item->id}") }}"><img src="https://image.tmdb.org/t/p/w500/{{ $item->poster_path }}" alt="{{ $item->title }}" class="w-100 border"></a>
					</div>

					<!-- vote -->
					<div class="my-3 text-nowrap">Note : {{ $item->vote_average }}</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container my-3">
		{{ $trendings->links('layouts/partials/paginator') }}
	</div>
</section>
@endsection