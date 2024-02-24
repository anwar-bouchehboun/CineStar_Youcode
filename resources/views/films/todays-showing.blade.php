@extends('layouts.sidebar')

@section('content')
    <section class="w-full m-12">
        <div class="flex rounded-3xl overflow-hidden bg-cover bg-center">
            <!-- Film Poster -->
            <div class="w-1/3 h-80 bg-cover bg-center"
                style="background-image: url('https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg');">
            </div>

            <!-- Film Details -->
            <div class="flex flex-col justify-between w-2/3 bg-white px-7 pt-4 pb-6 text-white">
                <div>
                    <span class="uppercase text-3xl font-semibold drop-shadow-lg">Inception</span>
                    <div class="text-xs text-gray-200 mt-2">
                        <a href="#" class="">Action</a>,
                        <a href="#" class="">Adventure</a>,
                        <a href="#" class="">Sci-Fi</a>
                    </div>
                    <p class="mt-4 text-sm text-gray-300">
                        Inception is an action-packed adventure in the Sci-Fi genre. Join us for an unforgettable
                        experience!
                    </p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <span class="text-sm text-gray-300">Showing time: 21:00</span>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <a href="{{route('films.booking-film')}}"
                            class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block">Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
