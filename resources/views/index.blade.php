@extends('layouts.main')

@section('content')

<div class="container mx-auto px-4 pt-8 border-b border-gray-800">
	<div class="popular-movies">
		<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semi-bold">Popular Movies</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
			@foreach($popularMovies as $popular)
			@if($loop->index < 10)
			<div class="mt-4">
				<a href="{{ route('movie.show', $popular['id']) }}">
					<img src="{{'https://image.tmdb.org/t/p/w500/'.$popular['poster_path']}}" alt="movie image" class="hover:opacity-75">
				</a>
				<div class="mt-2">
					<a href="{{ route('movie.show', $popular['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$popular['title']}}</a>
					<div class="flex items-center text-gray-400 text-sm">
						<span>
							<svg height="15" viewBox="0 -10 511.987 511" width="15"><path d="M510.652 185.902a27.158 27.158 0 00-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 001.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0010.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 007.98-28.927zm0 0" fill="#FFC107" data-original="#FFC107" class="active-path"/></svg>
						</span>
						<span class="ml-1">{{$popular['vote_average'] * 10 . '%'}}</span>
						<span class="mx-2">|</span>
						<span>{{ \Carbon\Carbon::parse($popular['release_date'])->format('M d, Y') }}</span>
					</div>
					<div class="text-gray-400 text-sm">
						@foreach($popular['genre_ids'] as $genre)
							{{ $genres->get($genre) }}
						@endforeach
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
</div>

<div class="container mx-auto px-4 pt-12 border-b border-gray-800">
	<div class="now-playing">
		<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semi-bold">Now Playing</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
			@foreach($nowPlayingMovies as $now)
				@if($loop->index < 5)
				<div class="mt-4">
				<a href="{{ route('movie.show', $now['id']) }}">
					<img src="{{ 'https://image.tmdb.org/t/p/w500/' . $now['poster_path'] }}" alt="movie image" class="hover:opacity-75">
				</a>
				<div class="mt-2">
					<a href="{{ route('movie.show', $now['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $now['title'] }}</a>
					<div class="flex items-center text-gray-400 text-sm">
						<span>
							<svg height="15" viewBox="0 -10 511.987 511" width="15"><path d="M510.652 185.902a27.158 27.158 0 00-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 001.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0010.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 007.98-28.927zm0 0" fill="#FFC107" data-original="#FFC107" class="active-path"/></svg>
						</span>
						<span class="ml-1">{{ $now['vote_average'] * 10 . '%' }}</span>
						<span class="mx-2">|</span>
						<span>{{ \Carbon\Carbon::parse($now['release_date'])->format('M d, Y') }}</span>
					</div>
					<div class="text-gray-400 text-sm">
						@foreach($now['genre_ids'] as $genre)
							{{ $genres->get($genre) }}
						@endforeach
					</div>
				</div>
			</div>
				@endif
			@endforeach
		</div>
	</div>
</div>

@endsection