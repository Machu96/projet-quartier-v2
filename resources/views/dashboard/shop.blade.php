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
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            {!! Form::open(['method' => 'post', 'url' => url('products')]) !!}
                            <td><input name="name" type="text" class="form-control"></td>
                            <td><input name="stock" type="number" class="form-control"></td>
                            <td><input name="shop" type="text" class="form-control"></td>
                            <td><button type="submit" class="btn btn-default">Ajouter</button></td>
                            {!! Form::close() !!}
                        </tr>

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
        <h4 class="modal-title">Ajouter un produit</h4>
    </div>
    {!! Form::open(['url' => url('products'), 'method' => 'post']) !!}
        <div class="modal-body">

            <div class="input-group">
                <label for="name">Nom</label>
                <input name="name" type="text" class="form-control">
            </div>
            
            <div class="input-group">
                <label for="stock">Stock disponible</label>
                <input name="stock" type="number" class="form-control">
            </div>

            <div class="input-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="input-group">
                <label for="shop_id">Magasin vendant le produit</label>
                <select name="shop_id" class="form-control select2 select2-hidden-accessible " style="width: 100%;" tabindex="-1" aria-hidden="true">
                    @forelse($shops as $shop)

                        <option value="{{ $shop->id }}">{{ $shop->name }}</option>

                    @empty

                        Aucun resultat correspondant

                    @endforelse
                </select>
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary add-product">Ajouter</button>
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

        $('.add-product').on('click', function(e){
            e.preventDefault();
            var form = $(e.target).parent().parent()[0];
            var token = form[0]
            var name = form[1];
            var stock = form[2];
            var description = form[3];
            var shop_id = form[4];

           $.post('{!! url('products') !!}', {
                '_token': token.value,
                'stock': stock.value,
                'name': name.value,
                'description': description.value,
                'shop_id': shop_id.value
            }).then(function(){
               alert('Produit ajouté')
               console.log()
               stock.value = '';
               name.value = '';
               description.value = '';
           });

        });

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