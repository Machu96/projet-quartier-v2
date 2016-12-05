@extends('default')



@section('content')

    <div class="grid-3 has-gutter">
        @foreach($places as $place)

            <div class="event">
                <div class="event-header">
                    <div class="event-place">{{ $place->name }}</div>
                </div>
                <div class="event-date">
                    {{ $place->name }}
                </div>
            </div>
            <div class="event">
                <div class="event-header">
                    <div class="event-place">{{ $place->name }}</div>
                </div>
                <div class="event-date">
                    {{ $place->name }}
                </div>
            </div>
            <div class="event">
                <div class="event-header">
                    <div class="event-place">{{ $place->name }}</div>
                </div>
                <div class="event-date">
                    {{ $place->name }}
                </div>
            </div>
            <div class="event">
                <div class="event-header">
                    <div class="event-place">{{ $place->name }}</div>
                </div>
                <div class="event-date">
                    {{ $place->name }}
                </div>
            </div> <div class="event">
                <div class="event-header">
                    <div class="event-place">{{ $place->name }}</div>
                </div>
                <div class="event-date">
                    {{ $place->name }}
                </div>
            </div>
            <div class="event">
                <div class="event-header">
                    <div class="event-place">{{ $place->name }}</div>
                </div>
                <div class="event-date">
                    {{ $place->name }}
                </div>
            </div>

        @endforeach
    </div>

@endsection



@section('script')

    {{--Mettre code jQuery perso ici--}}

@endsection