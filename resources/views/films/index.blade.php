@extends('layouts.sidebar')

@section('content')

        <main class=" flex-1 py-10  px-5 sm:px-10 ">
            <!-- Search -->
            <section>
                <div class="flex justify-between">
                    <div>
                        <div class="relative items-center content-center flex ml-2">
                            <span class="text-gray-400 absolute left-4 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </span>
                            <input type="text"
                                class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                                placeholder="Search ...">
                        </div>
                    </div>

                    @auth
                        <!-- Display User Info -->
                        <div class="flex gap-4">
                            @if (empty(Auth::user()->avatar))
                                <img src="{{ asset('/storage/images/default-avatar.jpg') }}" alt="Default Avatar"
                                    class="rounded-full h-10 w-10">
                            @else
                                <img src="{{ Auth::user()->avatar }}" alt="User Image" class="rounded-full h-10 w-10">
                            @endif
                            <span class="mt-3 text-black font-bold">{{ Auth::user()->name }}</span>
                        </div>
                    @endauth

                </div>
                <!--Film publication -->
                <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl overflow-hidden bg-cover bg-center px-4 py-6 text-white"
                style="background-image: url('images/inception.jpg');">
                <div class="bg-gradient-to-r from-black/30 to-transparent -mx-4 -mb-4 px-4 pb-4 pt-2">
                    <span class="uppercase text-3xl font-semibold text-white drop-shadow-lg">Experience the Magic: Premiering
                        at <span class="text-red-900">CimaStar</span> on <span class="text-yellow-300">March 22nd!</span></span>
                    <div class="mt-4 flex space-x-3 items-center">
                        <!-- Additional content if needed -->
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 m-12">
                    @foreach ($todayShowings as $showing)
                    <a href="{{ route('films.todays-showing', ['film_id' => $showing->film->id]) }}" class="cursor-pointer
                            flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                            <div style="background-image: url('{{ $showing->film->FilmImage }}');"
                                class="h-4/5 bg-cover bg-center rounded-t-3xl"></div>
                            <div class="w-full h-1/5 bg-black dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                                <span class="capitalize font-medium truncate">{{ $showing->film->FilmName }}</span>
                                <div class="flex space-x-2 items-center text-xs">
                                    <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32" viewBox="0 0 64 32"
                                        version="1.1">
                                        <g fill="#F5C518">
                                            <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                        </g>
                                        <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                            <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                            <path
                                                d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                                            </path>
                                            <path
                                                d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5950653 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                                            </path>
                                            <path
                                                d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span>7.4</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                
            

            </section>

            <!--Stars Section -->
            <section class="mt-9">

                <div class="flex items-center justify-between">
                    <span class="font-semibold text-gray-700 text-base dark:text-white">Top Stars</span>
                </div>

                <!--Stars-->
                <div class="mt-4 grid grid-cols-2  sm:grid-cols-4 gap-x-5 gap-y-5">
                    @foreach ($actors as $actor)
                        <div class="relative rounded-xl overflow-hidden">
                            <img src="{{ $actor->ActorImg }}" class="object-cover h-full w-full -z-10" alt="">
                            <div
                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end">
                                <div class="self-center flex flex-col items-center space-y-2">
                                    <span
                                        class="capitalize text-white font-medium drop-shadow-md">{{ $actor->ActorName }}</span>
                                    <span class="text-gray-100 text-xs">+12 Movies</span>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!--Films Section -->
            <section class="mt-9">
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-gray-700 text-base dark:text-white">Similar Movies</span>
                </div>

                <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
                    @foreach ($TopFilms as $film)
                    <a href="#"
                        class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <img src="{{ $film->FilmImage }}" class="h-4/5 object-cover w-full" alt="{{ $film->FilmName }}">
                        <div class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize font-medium truncate">{{ $film->FilmName }}</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                                    viewBox="0 0 64 32" version="1.1">
                                    <g fill="#F5C518">
                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                    </g>
                                    <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                        <path
                                            d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                                        </path>
                                        <path
                                            d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                                        </path>
                                        <path
                                            d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                                        </path>
                                    </g>
                                </svg>
                                <span>7.4</span>
                            </div>
                        </div>
                    </a>
                @endforeach




                </div>

            </section>
        </main>

@endsection
