@extends('layouts.sidebar')

@section('content')

@foreach($todayShowings as $showing)
    <section class="w-full m-12">
        <div class="flex rounded-3xl overflow-hidden bg-cover bg-center">
            <!-- Film Poster -->
            <div class="w-1/3 h-80 bg-cover bg-center"
                style="background-image: url('{{ $showing->FilmImage }}');">
            </div>

            <!-- Film Details -->
            <div class="flex flex-col justify-between w-2/3 bg-black px-7 pt-4 pb-6 text-white">
                <div>
                    <span class="uppercase text-3xl font-semibold drop-shadow-lg">{{ $showing->FilmName }}</span>
                    <div class="text-xs text-gray-200 mt-2">
                        <a href="#" class="">{{ $showing->GenreName }}</a>
                    </div>
                    <p class="mt-4 text-sm text-gray-300">
                        <!-- You can adjust the description based on your data -->
                        Your film description here.
                    </p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <span class="text-sm text-gray-300">Showing time: {{ $showing->showing_time }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach


    
    
@endsection
