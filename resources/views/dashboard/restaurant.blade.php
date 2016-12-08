@extends('dashboard.default')

@section('content-header')

    <h1>Gestion des restaurants</h1>

@endsection


@section('content')

    {!! Form::open(['url' => url('restaurants'), 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        <label for="nameFr">Nom</label>
        <input name="nameFr" id="nameFr" class="form-control" type="text">
    </div>

    <div class="form-group">
        <label for="descriptionFr">Description</label>
        <textarea class="form-control" name="descriptionFr" id="descriptionFr" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="nameEn">Nom anglais</label>
        <input name="nameEn" id="nameEn" class="form-control" type="text">
    </div>

    <div class="form-group">
        <label for="descriptionEn">Description anglaise</label>
        <textarea class="form-control" name="descriptionEn" id="descriptionEn" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="address">Adresse</label>
        <input name="address" id="address" class="form-control" type="text">
    </div>

    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input name="latitude" id="latitude" class="form-control" type="number">
    </div>

    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input name="longitude" id="longitude" class="form-control" type="number">
    </div>

    <div class="form-group">
        <label for="image">Longitude</label>
        <input class="form-control" name="image" id="image" type="file">
    </div>

    <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}


@endsection