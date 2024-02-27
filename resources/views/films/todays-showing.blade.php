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
            <!--<h2 class="text-2xl font-semibold mb-4">{{ $filmDetails->salle->saleName }}</h2>  Display Salle Name -->

            <div class="movie-screen ml-24">

                <img src="{{ asset('images/screen-thumb.png') }}" alt="Screen Thumbnail" />
            </div>
    
            <div class="row-container mt-8">
                @foreach($filmDetails->salle->zones as $zone)
                    <fieldset>
                        <legend>{{ $zone->zone_name }} - {{ $zone->zone_price }}$</legend>
                        <input type="hidden" name="zone_id" value="{{ $zone->id }}">
                        <div class="row">
                            @foreach($zone->seats as $seat)
                                <label class="mr-2">
                                    <input 
                                        type="checkbox" 
                                        name="selected_seats[]" 
                                        value="{{ $seat->id }}" 
                                        {{ $seat->seat_status == 'reserved' ? 'disabled' : '' }}>
                                    Seat {{ $seat->seat_number }}
                                </label>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Reserve Seats</button>
                    </fieldset>
                @endforeach
            </div>
            
        </div>
    </form>
    
</section>



       



@endsection
