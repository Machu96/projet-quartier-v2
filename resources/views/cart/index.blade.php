@extends('default')


@section('content')

    <div>

        @forelse($data as $d)

            {{ $d->productName }}<br>

        @empty

            Vous n'avez rien ajouté a votre panier

        @endforelse

    </div>

@endsection