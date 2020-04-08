@extends('layouts.main')

@section('content')

<div class="movie-info border-b border-gray-800">
	<div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
		<img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="move details" class="w-64 md:96 hover:opacity-75" style="width: 24rem">
		<div class="md:ml-24">
			<h2 class="text-4xl font-semibold">{{$movie['title']}} (2019)</h2>
			<div class="flex flex-wrap items-center text-gray-400 text-sm">
				<span>
					<svg height="15" viewBox="0 -10 511.987 511" width="15"><path d="M510.652 185.902a27.158 27.158 0 00-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 001.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0010.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 007.98-28.927zm0 0" fill="#FFC107" data-original="#FFC107" class="active-path"/></svg>
				</span>
				<span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
				<span class="mx-2">|</span>
				<span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y') }}</span>
				<span class="mx-2">|</span>
				<span>
					@foreach($movie['genres'] as $genre)
						{{ $genre['name'] }}
					@endforeach
				</span>
			</div>
			<p class="text-gray-300 mt-4">
				{{ $movie['overview'] }}
			</p>
			<div class="mt-12">
				<h4 class="text-white font-semibold">Featured Crew</h4>
				<div class="flex mt-4">
					@foreach($movie['credits']['crew'] as $crew)
						@if($loop->index < 2)
						<div class="mr-8">
						<div>{{ $crew['name'] }}</div>
						<div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
					</div>
						@endif
					@endforeach
					<div class="mr-8">
						<div>Tagline</div>
						<div class="text-sm text-gray-400">{{ $movie['tagline'] }}</div>
					</div>
				</div>
			</div>
			@if(count($movie['videos']['results']) > 0)
			<div class="mt-12">
				<a href="https://youtube.com/watch?v={{ $movie['videos']['results']['0']['key'] }}" class="flex inline-flex items-center  bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-700 transition ease-in-out duration-150 ">
					<svg viewBox="0 0 511.999 511.999" width="20" height="20"><path d="M443.86 196.919L141.46 10.514C119.582-2.955 93.131-3.515 70.702 9.016c-22.429 12.529-35.819 35.35-35.819 61.041v371.112c0 38.846 31.3 70.619 69.77 70.829l.313.001c12.022-.001 24.55-3.769 36.251-10.909 9.413-5.743 12.388-18.029 6.645-27.441-5.743-9.414-18.031-12.388-27.441-6.645-5.473 3.338-10.818 5.065-15.553 5.064-14.515-.079-30.056-12.513-30.056-30.898V70.058c0-11.021 5.744-20.808 15.364-26.183 9.621-5.375 20.966-5.135 30.339.636l302.401 186.405c9.089 5.596 14.29 14.927 14.268 25.601-.022 10.673-5.261 19.983-14.4 25.56L204.147 415.945c-9.404 5.758-12.36 18.049-6.602 27.452 5.757 9.404 18.048 12.36 27.452 6.602l218.611-133.852c20.931-12.769 33.457-35.029 33.507-59.55.05-24.518-12.386-46.83-33.255-59.678z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFCFC"/></svg>
					<span class="ml-2">Play Trailor</span>
				</a>
			</div>
			@endif
		</div>
	</div>
</div>

<div class="movie-cast border-b border-gray-800">
	<div class="container mx-auto px-4 py-12">
		<h2 class="text-4xl font-semibold">Cast</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
			@foreach($movie['credits']['cast'] as $cast)
				@if($loop->index < 5)
				<div class="mt-4">
					<a href="">
						<img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}" alt="movie image" class="hover:opacity-75">
					</a>
					<div class="mt-2">
						<a href="" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
						<div class="text-gray-400 text-sm">
						{{ $cast['character'] }}
						</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>
	</div>
</div>

<div class="movie-cast border-b border-gray-800">
	<div class="container mx-auto px-4 py-12">
		<h2 class="text-4xl font-semibold">Scene Images</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
			@foreach($movie['images']['backdrops'] as $scene)
				@if($loop->index < 6)
				<div class="mt-4">
					<a href="">
						<img src="{{ 'https://image.tmdb.org/t/p/w500/' . $scene['file_path'] }}" alt="movie image" class="hover:opacity-75">
					</a>
				</div>
				@endif
			@endforeach
		</div>
	</div>
</div>


@endsection