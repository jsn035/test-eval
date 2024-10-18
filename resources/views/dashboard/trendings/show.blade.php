<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Trendings') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<form class="max-w mx-auto p-3" action="{{ url("/dashboard/trendings/{$trending->id}") }}" method="POST">
					@csrf
					<input type="hidden" name="_method" value="patch" />

					<div class="mb-3">
						<label
							for="title"
							class="block mb-2 text-sm font-medium text-gray-900">Titre</label>

						<input
							type="text"
							id="title"
							name="title"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->title }}"
							required />
					</div>

					<div class="mb-3">
						<label
							for="original_title"
							class="block mb-2 text-sm font-medium text-gray-900">Titre original</label>

						<input
							type="text"
							name="original_title"
							id="original_title"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->original_title }}"
							required />
					</div>

					<div class="mb-3">
						<label
							for="media_type"
							class="block mb-2 text-sm font-medium text-gray-900">Type</label>

						<input
							type="text"
							name="media_type"
							id="media_type"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->media_type }}"
							required />
					</div>

					<div class="mb-3">
						<label
							for="original_language"
							class="block mb-2 text-sm font-medium text-gray-900">Langue originale</label>

						<input
							type="text"
							name="original_language"
							id="original_language"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->original_language }}"
							required />
					</div>

					<div class="mb-3">
						<label
							for="overview"
							class="block mb-2 text-sm font-medium text-gray-900">Synopsis</label>

						<textarea
							name="overview"
							id="overview"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							rows="6"
							required>{{ $trending->overview }}"</textarea>
					</div>

					<div class="mb-3">
						<label
							for="poster_path"
							class="block mb-2 text-sm font-medium text-gray-900">Poster</label>

						<input
							type="text"
							name="poster_path"
							id="poster_path"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->poster_path }}"
							required />
					</div>

					<div class="mb-3">
						<label
							for="popularity"
							class="block mb-2 text-sm font-medium text-gray-900">Popularité</label>

						<input
							type="number"
							name="popularity"
							id="popularity"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->popularity }}"
							step="0.01"
							min="0"
							required />
					</div>

					<div class="mb-3">
						<label
							for="vote_average"
							class="block mb-2 text-sm font-medium text-gray-900">Note moyenne</label>

						<input
							type="number"
							name="vote_average"
							id="vote_average"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->vote_average }}"
							step="0.01"
							min="0"
							max="10"
							required />
					</div>

					<div class="mb-3">
						<label
							for="vote_count"
							class="block mb-2 text-sm font-medium text-gray-900">Nb. votes</label>

						<input
							type="number"
							name="vote_count"
							id="vote_count"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
							value="{{ $trending->vote_count }}"
							min="0"
							required />
					</div>

					<button
						type="submit"
						class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>