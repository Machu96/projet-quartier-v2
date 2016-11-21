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
        
        <table class="table table-auto">
            @forelse($data as $d)
                <tr>
                    <th>{{ $d->productName }}</th>
                    <th>{{ $d->productDescription }}</th>
                    <th>Restant : {{ $d->productStock }}</th>
                    <th>
                        {!! Form::open(['url' => url('cart'), 'method' => 'POST']) !!}
                            <button class="add-cart-button" value="{{ $d->productId }}">Ajouter au panier</button>
                        {!! Form::close() !!}
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
            $('.add-cart-button').click(function(e){
                e.preventDefault();

                console.log($($(e).currentTarget + 'input[name=_token]'))
                $.post(
                    '{!! url('cart') !!}',
                    {
                        "id": e.target.value,
                        "_token": $(e)
                    }
                ).then(function(e){
                    console.log(e)
                });

                $.get(
                        '{!! url('cart') !!}'
                ).then(function(response){
                    console.log(response)
                });

            });


            //Filtrer les données
            $('#name').keyup(function(){
                $.getJSON(
                        '{!! url('catalog/filter') !!}/' + this.value
                )
                .then(function (response) {
                    console.log(response)
                })
            })

        });
    </script>

@endsection