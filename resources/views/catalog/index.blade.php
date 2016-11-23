{{--

    Cette page sera un catalogue produit répertoriant tous les "Product" vendu par les "Shop"
    En terme de design il faut lister plusieurs elements avec un moyen de filtrer par commercant/type de produit/...
    {!! var_dump($data) !!} pour voir les données récupérées

--}}

@extends('default')

@section('content')

    {{-- Mettre le contenu ici --}}
    <h2>Titre exemple</h2>
    <div style="background-color: white">

        <form method="get" action="{!! url('CatalogController@filter') !!}">

            <label for="name">Nom de l'article</label>
            <input name="name" id="name" type="text">

        </form>

        <a href="{!! url('clearSession') !!}">Clear</a>
        
        <table class="table table-auto">
            @forelse($data as $d)
                <tr>
                    <th>{{ $d->productName }}</th>
                    <th>{{--{{ $d->productDescription }}--}}</th>
                    <th>Restant : {{ $d->productStock }}</th>
                    <th>
                        <div class="add-cart-parent">
                            {!! Form::open(['url' => url('cart'), 'method' => 'POST']) !!}
                            <button class="add-cart-button" type="submit" value="{{ $d->productId }}">Ajouter au panier</button>
                            {!! Form::close() !!}
                        </div>
                    </th>

                </tr>
            @empty

                Aucun article correspondants

            @endforelse
        </table>
    </div>

@endsection



@section('script')
    {{--
        Pour filtrer les données
        Ou appeler une methode
     --}}
    <script>
        $(document).ready(function(){

            //Ajouter au panier
            $('.add-cart-button').on('click', function(e){

                e.preventDefault();

                $.post(
                    '{!! url('cart') !!}',
                    {
                        "id": e.target.value,
                        "_token": $(e.target).parent()[0][0].value
                    }
                );

                $.get(
                    '{!! url('cart') !!}'
                ).then(function(response){
                    console.log('response get', response)
                });

            });


            //Filtrer les données
            $('#name').keyup(function(){
                if (this.value !== ''){
                    $.getJSON(
                            '{!! url('catalog/filter') !!}/' + this.value
                    )
                    .then(function (response) {
                        console.log(response)
                    })
                }
            })

        });
    </script>

@endsection