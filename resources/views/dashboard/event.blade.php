@extends('dashboard.default')


@section('content')

    {!! Form::open(['url' => url('events'), 'method' => 'post', 'files' => true]) !!}

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

    <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}

@endsection