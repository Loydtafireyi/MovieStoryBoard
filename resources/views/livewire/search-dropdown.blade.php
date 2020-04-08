<div class="relative">
	<input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search here">
	<div class="absolute top-0">
		<svg class="fill-current text-gray-500 w-4 mt-2 ml-2" viewBox="0 0 512 512"><path d="M508.875 493.792L353.089 338.005c32.358-35.927 52.245-83.296 52.245-135.339C405.333 90.917 314.417 0 202.667 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c52.043 0 99.411-19.887 135.339-52.245l155.786 155.786a10.634 10.634 0 007.542 3.125c2.729 0 5.458-1.042 7.542-3.125 4.166-4.167 4.166-10.917-.001-15.083zM202.667 384c-99.979 0-181.333-81.344-181.333-181.333S102.688 21.333 202.667 21.333 384 102.677 384 202.667 302.646 384 202.667 384z" data-original="#000000" class="active-path" data-old_color="#000000"/></svg>
	</div>
	<div class="absolute bg-gray-800 rounded w-64 mt-4 text-sm">
		<ul>
			@foreach($searchResults as $search)
				@if($loop->index < 7)
				<li class="border-b border-gray-700">
					<a href="{{route('movie.show', $search['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
					<img src="https://image.tmdb.org/t/p/w92{{$search['poster_path']}}" class="w-8">
					<span>{{ $search['title'] }}</span>
				</a>
				</li>
				@endif
			@endforeach
		</ul>
	</div>
</div>
