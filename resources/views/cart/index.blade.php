@extends('default')


@section('content')
    <div class="header header-page"></div>
    <div class="header-mt">
        <div class="flex-container-column">
            <h1 class="page-title" id="home_title_1">{{ trans('panier.titre1') }}</h1>
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

        <input type="submit" value="Payer" id="smaug">
    {!! Form::close() !!}


        @forelse($data as $d)

            <div class="grid-3 pam">
                <div class="three-quarters"> <h3>{{ $d->productName }}</h3>
                    <p class="word-break">{{ $d->productDescription }}</p>
                </div>
                <div class="one-quarter">{{ $d->shopName}}</div>
                <div>{{ $d->productPrice }} €</div>
                <div>{{ $d->quantity }}</div>
                <div>{{ $d->total }} €</div>
            </div>

        @empty

           {{ trans('panier.annonce1') }}

        @endforelse

    </div>

@endsection


@section('script')

    <script>
        $(document).ready(function(){

            $('#smaug').on('click', function (e) {
                var data = {!! $data !!}
                e.preventDefault();
                $.post('{!! url('pdf') !!}', {
                    "_token": $(e.target).parent()[0][0].value,
                    "data": data
                })
            });

        });
    </script>

@endsection

