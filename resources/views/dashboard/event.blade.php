@extends('dashboard.default')


@section('content')

    {!! Form::open(['url' => url('events'), 'method' => 'post', 'files' => true]) !!}

    <div class="input-group">
        <label for="name">Nom</label>
        <input name="name" id="name" class="form-control" type="text">
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
        <label for="date">Date</label>
        <input class="form-control" name="date" id="date" type="date">
    </div>

    <button class="btn-primary btn" type="submit">Ajouter</button>


    {!! Form::close() !!}

@endsection