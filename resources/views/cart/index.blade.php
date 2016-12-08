@extends('default')

<div class="header header-page"></div>
@section('content')

    <div class="header-mt">
        <div class="flex-container-column">
            <h1 class="page-title" id="home_title_1">Votre panier</h1>
        </div>
    </div>
    <div style="background-color: white;" class="header-mt">
        @forelse($data as $d)


            <div class="grid-3 pam">
                <div class="three-quarters"> <h3>{{ $d->productName }}</h3>
                    <p class="word-break">{{ $d->productDescription }}</p>
                </div>
                <div class="one-quarter">{{ $d->shopName}}</div>
            </div>



        @empty

            Vous n'avez rien ajouté a votre panier

        @endforelse

    </div>

@endsection
