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
            <thead>

            </thead>
            <tbody></tbody>
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

            var $table = $('table').clone();

            console.log($table)


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
                    console.log(response);
                });

            });




            //Filtrer les données
            $('#name').keyup(function(){
                $('table > tbody > *').remove();

                if (this.value !== ''){
                    $.getJSON(
                            '{!! url('catalog/filter') !!}/' + this.value
                    )
                    .then(function (response) {
                        displayData(response);
                    })
                }
                else{
                    loadProducts();
                }
            });

            // First load

            function loadProducts(){
                $.getJSON(
                        '{!! url('load-products') !!}'
                )
                .then(function (response) {
                    displayData(response);
                });
            }

            function displayData(data){
                data.map(function (item) {
                    var html =
                        '<tr>' +
                            '<th class="product-name">'+ item.productName +'</th>' +
                            '<th>' +
                                '<div class="add-cart-parent">' +
                                '{!! Form::open(['url' => url('cart'), 'method' => 'POST']) !!}' +
                                '<button class="add-cart-button">Ajouter au panier</button>' +
                                '{!! Form::close() !!}' +
                                '</div>' +
                            '</th>' +
                        '</tr>';

                    $('table > tbody').append(html);
                });
            }

            loadProducts();
        });
    </script>

@endsection