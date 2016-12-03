{{--

    Cette page sera un catalogue produit répertoriant tous les "Product" vendu par les "Shop"
    En terme de design il faut lister plusieurs elements avec un moyen de filtrer par commercant/type de produit/...
    {!! var_dump($data) !!} pour voir les données récupérées

--}}

@extends('default')

@section('content')

    {{-- Mettre le contenu ici --}}
    <div class="header-mt">
        <div class="flex-container-column">
            <h1 class="page-title" id="home_title_1">Nos produits</h1>
        </div>
    </div>
    <div style="background-color: white;" class="header-mt">
        <div class="ptm mlm">
            <form method="get" action="{!! url('CatalogController@filter') !!}">

                <label for="name">Nom de l'article</label>
                <input name="name" id="name" type="text">

            </form>

            <a href="{!! url('clearSession') !!}">Clear</a>
        </div>
        <div>
            <div id="product-grid" class="flex-container"></div>
        </div>

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
            $('#product-grid ').on('click', '.add-cart-button',function(e){

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
                $('#product-grid > *').remove();

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
                        '<div class=" inner-grid mtl w400p">' +
                        '<h5 class="product-name txtcenter">'+ item.productName +'</h5>' +
                        '<div class="product-image center w90"></div>' +
                        '<p class="product-description prs pls">'+ item.productDescription+'</p>' +
                        '<div class=" mts mbs txtcenter">' +
                        '<div class="add-cart-parent">' +
                        '{!! Form::open(['url' => url('cart'), 'method' => 'POST']) !!}' +
                        '<button class="add-cart-button" value="'+item.productId+'">Ajouter au panier</button>' +
                        '{!! Form::close() !!}' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                    $('#product-grid').append(html);
                });
            }

            loadProducts();
        });
    </script>

@endsection