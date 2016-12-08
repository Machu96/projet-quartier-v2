@extends('default')

<div class="header header-page"></div>
@section('content')

    <div class="header-mt">
        <div class="flex-container-column">
            <h1 class="page-title" id="home_title_1">Votre panier</h1>
        </div>
    </div>
   <div style="background-color: white;" class="header-mt">

    {!! Form::open(['method' => 'post', 'url' => 'https://www.sandbox.paypal.com/cgi-bin/webscr']) !!}

        <input type="hidden" name="cmd" value="_cart">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="maximeblanc.dev@gmail.com">

        @for($i = 1; $i <= sizeof($data); $i++)
           <input type="hidden" name="item_name_{{$i}}" value="{{ $data[$i - 1]->productName }}">
           <input type="hidden" name="amount_{{ $i }}" value="2.00">
           <input type="hidden" name="shipping_{{ $i }}" value="2.50">
        @endfor

        <input type="submit" value="Payer">
    {!! Form::close() !!}


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
