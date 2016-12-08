@extends('dashboard.default')


@section('content')

    {!! Form::open(['url' => url('events'), 'method' => 'post', 'files' => true]) !!}

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
        <label for="image">Image</label>
        <input class="form-control" name="image" id="image" type="file">
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" name="date" id="date" type="date">
    </div>

    <div class="form-group">
        <label for="hour">Heure</label>
        <input class="form-control" name="hour" id="hour" type="time">
    </div>
    <div class="form-group">
        <label for="place">Lieux</label>
        <input name="place" id="place" class="form-control" type="text">
    </div>

    <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}

@endsection