<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Trendings') }}
		</h2>
	</x-slot>

	<div class="my-12 text-end">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<a href="{{ url("/dashboard/trendings/create") }}" class="text-center text-white cursor-pointer bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nouveau</a>
		</div>
	</div>

	<div class="my-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<table class="w-full text-sm text-left rtl:text-right text-gray-500">
					<thead class="text-xs text-gray-700 uppercase bg-gray-50">
						<tr>
							<th scope="col" class="px-6 py-3">Titre</th>
							<th scope="col" class="px-6 py-3">Type</th>
							<th scope="col" class="px-6 py-3">Langue originale</th>
							<th scope="col" class="px-6 py-3">Popularité</th>
							<th scope="col" class="px-6 py-3">Note moyenne</th>
							<th scope="col" class="px-6 py-3">Nb. votes</th>
							<th scope="col" class="px-6 py-3">&nbsp;</th>
						</tr>
					</thead>

					<tbody>
						@foreach($trendings as $trending)
						<tr class="bg-white border-b">
							<td class="px-6 py-4">{{ $trending->title }}<br><em>{{ $trending->original_title }}</em></td>
							<td class="px-6 py-4">{{ $trending->media_type }}</td>
							<td class="px-6 py-4">{{ $trending->original_language }}</td>
							<td class="px-6 py-4">{{ $trending->popularity }}</td>
							<td class="px-6 py-4">{{ $trending->vote_average }}</td>
							<td class="px-6 py-4">{{ $trending->vote_count }}</td>
							<td class="px-6 py-4">
								<a
									href="{{ url("/dashboard/trendings/{$trending->id}") }}"
									class="font-medium text-blue-600 hover:underline">Éditer</a>

								<form
									method="POST"
									action="/dashboard/trendings/{{$trending->id}}"
									onsubmit="return confirm('Cet élément va être supprimé.');">
									@csrf
									<input type="hidden" name="_method" value="delete" />

									<div class="form-group">
										<input
											type="submit"
											class="delete font-medium text-red-600 hover:underline cursor-pointer"
											value="Supprimer">
									</div>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-app-layout>