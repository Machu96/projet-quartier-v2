@extends('dashboard.default')


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