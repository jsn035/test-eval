@extends('layouts/front')

@section('content')
<section id="trending" class="my-3">
	<div class="container">
		<div class="container bg-body border rounded">
			<div class="row g-3">
				<!-- poster -->
				<div class="col-3">
					<div class="text-center px-3">
						<div class="my-3">
							<a href="https://image.tmdb.org/t/p/original/{{ $trending->poster_path }}"><img src="https://image.tmdb.org/t/p/w500/{{ $trending->poster_path }}" alt="{{ $trending->title }}" class="w-100 border"></a>
						</div>

						<div class="my-3"><a href="https://www.themoviedb.org/movie/{{ $trending->id }}">Voir sur TMDB</a></div>
					</div>
				</div>

				<!-- détails -->
				<div class="col-9">
					<div class="px-3">
						<!-- tous -->
						<div class="my-3">
							<a href="{{ url("/trendings") }}">&larr; Tous</a>
						</div>

						<!-- title -->
						<div class="my-3">
							<h1 class="my-0">{{ $trending->title }}</h1>
							<em>{{ $trending->original_title }} ({{ $trending->original_language }})</em>
						</div>

						<hr>

						<!-- overview -->
						<div class="my-3">
							<div class="my-3">
								<em><strong>Type : </strong>{{ $trending->media_type }}</em><br>
								<em><strong>Note :</strong> {{ $trending->vote_average }} / 10 ({{ $trending->vote_count }} votes)</em>
							</div>

							<p><strong></strong>{{ $trending->overview }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</section>
@endsection