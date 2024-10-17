@extends('layouts/front')

@section('content')
<section id="trendings" class="my-3">
	<div class="container my-3">
		<div class="row row-cols-3 g-3">
			@foreach($trendings->items() as $item)
			<div class="col">
				<div class="px-3 bg-body text-center border rounded">
					<!-- title -->
					<h1 class="fs-3 my-3 text-nowrap"><a href="{{ url("/trendings/{$item->id}") }}">{{ $item->title }}</a></h1>

					<!-- poster -->
					<div class="my-3">
						<a href="#"><img src="https://image.tmdb.org/t/p/w500/{{ $item->poster_path }}" alt="{{ $item->title }}" class="w-100 border"></a>
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
