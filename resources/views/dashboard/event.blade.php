@extends('dashboard.default')


@section('content')

    {!! Form::open(['url' => url('events'), 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        <label for="name">Nom</label>
        <input name="name" id="name" class="form-control" type="text">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
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