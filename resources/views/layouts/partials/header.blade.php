<header class="my-3">
	<div class="container my-3">
		<div class="d-flex gap-3 bg-primary-subtle p-3 rounded">
			<div class="flex-grow-1">{{ env('APP_TITLE') }}</div>

			@if (Route::has('login'))
			@auth
			<div>
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</div>

			@else
			<div>
				<a href="{{ route('login') }}">Log in</a>
			</div>
		
			@if (Route::has('register'))
			<div>
				<a href="{{ route('register') }}">Register</a>
			</div>
			@endif
			@endauth
			@endif
		</div>
	</div>
</header>