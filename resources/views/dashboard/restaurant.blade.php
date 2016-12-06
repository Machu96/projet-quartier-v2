@extends('dashboard.default')

@section('content-header')

    <h1>Gestion des restaurants</h1>

@endsection


@section('content')

    {!! Form::open(['url' => url('places'), 'method' => 'post']) !!}

    <div class="input-group">
        <label for="name">Nom</label>
        <input name="name" id="name" class="form-control" type="text">
    </div>

    <div class="input-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="input-group">
        <label for="address">Adresse</label>
        <input name="address" id="address" class="form-control" type="text">
    </div>

    <div class="input-group">
        <label for="latitude">Latitude</label>
        <input name="latitude" id="latitude" class="form-control" type="number">
    </div>

    <div class="input-group">
        <label for="longitude">Longitude</label>
        <input name="longitude" id="longitude" class="form-control" type="number">
    </div>

    <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}


@endsection