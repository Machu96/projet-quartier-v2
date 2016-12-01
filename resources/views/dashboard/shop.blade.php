@extends('dashboard.default')

@section('css')

    {!! Html::style('dashboard/plugins/select2/select2.min.css') !!}

@endsection


@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Stock</th>
                            <th>Magasin</th>
                            <th><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Launch modal</button></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $product->productName }}</td>
                                <td>{{ $product->productStock }}</td>
                                <td>{{ $product->shopName }}</td>
                                <td>
                                    {!! Form::open(['method' => 'delete', 'url' => url('products', $product->productId)]) !!}

                                        <button class="btn btn-danger delete-product" value="{{ $product->productId }}" type="submit">Supprimer</button>

                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty

                            <p>Aucun produit</p>

                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Produit</th>
                            <th>Stock</th>
                            <th>Magasin</th>
                        </tr>
                        <tr>
                            {!! Form::open(['url' => '']) !!}
                            <th>Stock</th>
                            <th>Magasin</th>
                            <th>Produit</th>
                            {!! Form::close() !!}
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection

@section('modal')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
    </div>
    {!! Form::open(['method' => 'post', 'url' => url('products'), 'class' => 'add-product']) !!}
        <div class="modal-body">

            <input name="name" type="text" class="form-control">
            <input name="stock" type="number" class="form-control">

            <select class="form-control select2 select2-hidden-accessible " style="width: 100%;" tabindex="-1" aria-hidden="true">
                @forelse($shops as $shop)

                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>

                @empty

                    Aucun resultat correspondant

                @endforelse
            </select>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    {!! Form::close() !!}

@endsection



@section('script')
    {!! Html::script('dashboard/plugins/select2/select2.full.min.js') !!}

    <script>
    $(document).ready(function() {
        $(".select2").select2({
            placeholder: "Magasin",
            allowClear: true
        });

        /*$('.add-product').on('click', function(e){

            $.post('products', {
                '_token': e
            });

        });*/

        $('.delete-product').on('click', function(e){
            e.preventDefault();

            $.ajax({
                url: '{!! url('products') !!}/' + e.target.value,
                type: 'DELETE',
                data: {
                    '_token': $(e.target).parent()[0][1].value
                }
            }).then(function(){
                $(e.target).parent().parent().parent().remove();
            });
        });


    });
    </script>

@endsection