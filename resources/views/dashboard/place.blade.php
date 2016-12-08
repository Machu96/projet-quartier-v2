@extends('dashboard.default')

@section('content-header')

    <h1>Gestion des lieux culturels</h1>

@endsection


@section('content')

    {!! Form::open(['url' => url('places'), 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        <label for="name-fr">Nom</label>
        <input name="name-fr" id="name-fr" class="form-control" type="text">
    </div>

    <div class="form-group">
        <label for="description-fr">Description</label>
        <textarea class="form-control" name="description-fr" id="description-fr" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="name-en">Nom anglais</label>
        <input name="name-en" id="name-en" class="form-control" type="text">
    </div>

    <div class="form-group">
        <label for="description-en">Description anglaise</label>
        <textarea class="form-control" name="description-en" id="description-en" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="creation_date">Date de création</label>
        <input type="date" name="creation_date" id="creation_date" class="form-control">
    </div>

    <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" name="image" id="image" type="file">
        </div>

        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input class="form-control" name="latitude" id="latitude" type="number">
        </div>

        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input class="form-control" name="longitude" id="longitude" type="number">
        </div>

        <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}

    <div class="flex-container">
    @foreach($places as $place)

        <div class="item_gallery">
            <h1>{{ $place->name }}</h1>
            <img src="/storage/app/public/places/{{$place->url }}">
            <p>{{ $place->description }}</p>

        </div>

    @endforeach
    </div>

@endsection