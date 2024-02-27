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

            <!-- Seats for each salle, zone, and prices -->
            <div class="mt-4">
                @foreach($showing->salle->zones as $zone)
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">{{ $showing->salle->saleName }} - {{ $zone->zone_name }}</h3>
                        <p>Price: {{ $zone->zone_price }}$</p>
                        <form action="#" method="post">
                            @csrf
                            <input type="hidden" name="today_showing_id" value="{{ $showing->id }}">
                            <input type="hidden" name="salle_id" value="{{ $showing->salle->id }}">
                            <input type="hidden" name="zone_id" value="{{ $zone->id }}">

                            @foreach($zone->seats as $seat)
                                <label class="mr-2">
                                    <input type="checkbox" name="selected_seats[]" value="{{ $seat->id }}">
                                    Seat {{ $seat->seat_number }}
                                </label>
                            @endforeach

                            <button type="submit" class="btn btn-primary mt-2">Reserve Seats</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </section>
    @endforeach

    
    
@endsection
