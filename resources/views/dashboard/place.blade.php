@extends('dashboard.default')

@section('content-header')

    <h1>Gestion des lieux culturels</h1>

@endsection


@section('content')

    {!! Form::open(['url' => url('places'), 'method' => 'post', 'files' => true]) !!}

        <div class="input-group">
            <label for="name">Nom</label>
            <input name="name" id="name" class="form-control" type="text">
        </div>

        <div class="input-group">
            <label for="creation_date">Date de création</label>
            <input type="date" name="creation_date" id="creation_date" class="form-control">
        </div>

        <div class="input-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="input-group">
            <label for="image">Image</label>
            <input class="form-control" name="image" id="image" type="file">
        </div>

        <div class="input-group">
            <label for="latitude">Latitude</label>
            <input class="form-control" name="latitude" id="latitude" type="number">
        </div>

        <div class="input-group">
            <label for="longitude">Longitude</label>
            <input class="form-control" name="longitude" id="longitude" type="number">
        </div>

        <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}

    @foreach($places as $place)

        <div>
            {{ $place->name }}
            {{ $place->description }}
        </div>

    @endforeach


@endsection