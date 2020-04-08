<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MovieApp</title>

	<!-- stlyes -->
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<livewire:styles>

</head>
<body class="bg-gray-900 text-white">
	<nav class="border-b border-gray-800">
		<div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
			<ul class="flex items-center">
				<li>
					<a href="{{route('movie.index')}}"  class="flex mb-2">
						<svg width="32px" viewBox="0 0 399.6 399.6" style="enable-background:new 0 0 399.6 399.6;" xml:space="preserve">
							<g><g>
								<g>
									<path d="M124.762,164.957c-0.008-5.184-0.776-10.188-2.185-14.915l250.709-50.455l-12.103-60.125    c-5.348-26.57-31.313-43.838-57.886-38.49L74.112,47.095c-26.571,5.348-43.838,31.314-38.49,57.886l3.846,19.108    C27.483,133.708,19.8,148.472,19.8,165.036c0,20.105,11.311,37.562,27.911,46.376v139.033c0,27.104,22.051,49.154,49.155,49.154    h233.78c27.104,0,49.154-22.051,49.154-49.154V164.957H124.762z M96.137,165.036c0,13.154-10.702,23.855-23.855,23.855    s-23.855-10.701-23.855-23.855c0-13.153,10.702-23.855,23.855-23.855S96.137,151.882,96.137,165.036z M327.275,41.136    c0.821,1.458,1.438,3.063,1.785,4.791l5.637,27.999l-34.479,6.938L327.275,41.136z M240.026,47.132l50.432-10.149l-36.186,53.128    l-50.431,10.149L240.026,47.132z M143.65,66.528l50.43-10.149l-36.183,53.129l-50.431,10.148L143.65,66.528z M67.75,98.516    c-1.782-8.857,3.973-17.513,12.83-19.295l17.125-3.446l-25.056,36.789c-0.123-0.001-0.244-0.009-0.367-0.009    c-0.569,0-1.133,0.025-1.699,0.043L67.75,98.516z M81.284,231.335c-0.517-1.591-0.804-3.286-0.804-5.05v-9.408    c13.247-2.079,24.842-9.117,32.844-19.15h2.324L81.284,231.335z M168.003,242.671h-51.442l45.955-44.944h51.442L168.003,242.671z     M266.311,242.671h-51.439l45.954-44.944h51.439L266.311,242.671z M347.03,226.285c0,9.035-7.353,16.386-16.387,16.386h-17.469    l33.854-33.108L347.03,226.285L347.03,226.285z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
								</g>
							</g></g> 
						</svg>
					</a>
				</li>
				<li class="ml-16">
					<a href="{{route('movie.index')}}" class="hover:text-gray-300">Movies</a>
				</li>
				<li class="ml-6">
					<a href="" class="hover:text-gray-300">TV Shows</a>
				</li>
				<li class="ml-6">
					<a href="" class="hover:text-gray-300">Actors</a>
				</li>
			</ul>
			<div class="flex items-center">
				<!-- Search box -->
				<livewire:search-dropdown>

				<!-- User profile image -->
				<div class="ml-4">
					<a href="">
						<img src="/img/user4.jpg" alt="avatar" class="rounded-full w-8 h-8">
					</a>
				</div>
			</div>
		</div>
	</nav>
	@yield('content')

	<!-- Scripts -->
	<livewire:scripts>
</body>
</html>