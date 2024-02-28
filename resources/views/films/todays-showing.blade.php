@extends('layouts.sidebar')


@section('content')

<section class="w-full m-12">
    <form action="{{ route('reserve.seats') }}" method="post" class="reserve-form">
        @csrf
        <input type="hidden" name="today_showing_id" value="{{ $filmDetails->id }}">
        <input type="hidden" name="salle_id" value="{{ $filmDetails->salle->id }}">
    
        <div class="flex rounded-3xl overflow-hidden bg-cover bg-center">
            <!-- Film Poster -->
            <div class="w-1/3 h-80 bg-cover bg-center" style="background-image: url('{{ $filmDetails->film->FilmImage }}');">
            </div>
    
            <!-- Film Details -->
            <div class="flex flex-col justify-between w-2/3 bg-black px-7 pt-4 pb-6 text-white">
                <div>
                    <span class="uppercase text-3xl font-semibold drop-shadow-lg">{{ $filmDetails->film->FilmName }}</span>
                    <div class="text-xs text-gray-200 mt-2">
                        <a href="#" class="">{{ $filmDetails->GenreName }}</a>
                    </div>
                    <p class="mt-4 text-sm text-gray-300">
                        {{ $filmDetails->film->FilmDesc }}
                    </p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <span class="text-sm text-gray-300">Film Time: {{ $filmDetails->showing_time }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-8">
            <h2 class="text-2xl font-semibold mb-4">{{ $filmDetails->salle->saleName }}</h2>  

            <div class="movie-screen ml-24">

                <img src="{{ asset('images/screen-thumb.png') }}" alt="Screen Thumbnail" />
            </div>
    
            <div class="bg-white border-2 border-gray-300 rounded-lg p-4 m-4 shadow-md">
            @foreach($filmDetails->salle->zones as $zone)
                <div class="border-2 border-gray-300 rounded p-4 m-4 max-w-xs">
                    <h2 class="text-lg font-bold mb-2">{{ $zone->zone_name }} - {{ $zone->zone_price }}$</h2>
                    <input type="hidden" name="zone_id" value="{{ $zone->id }}">
                    <div class="flex flex-wrap gap-2">
                        @foreach($zone->seats as $seat)
                            <input 
                                type="checkbox" 
                                name="selected_seats[]" 
                                value="{{ $seat->id }}" 
                                id="seat-{{ $seat->id }}" 
                                {{ $seat->seat_status == 'reserved' ? 'disabled' : '' }}
                                class="hidden">
                            <label 
                                for="seat-{{ $seat->id }}" 
                                class="flex flex-col items-center justify-center w-10 h-10 cursor-pointer 
                                    {{ $seat->seat_status == 'reserved' ? 'bg-red-500' : 'bg-green-500' }}
                                    text-white rounded relative">
                                <span class="absolute top-0">{{ $seat->seat_number }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                                </svg>
                            </label>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Reserve Seats</button>
                </div>
            @endforeach
        </div>

            
            
        </div>
    </form>
    
</section>



       



@endsection
