<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {!! Html::style('dashboard/bootstrap/css/bootstrap.min.css') !!}
    <style>
        .height {
            min-height: 200px;
        }

        .icon {
            font-size: 47px;
            color: #5CB85C;
        }

        .iconbig {
            font-size: 77px;
            color: #5CB85C;
        }

        .table > tbody > tr > .emptyrow {
            border-top: none;
        }

        .table > thead > tr > .emptyrow {
            border-bottom: none;
        }

        .table > tbody > tr > .highrow {
            border-top: 3px solid;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <i class="fa fa-search-plus pull-left icon"></i>
                    <h2>Invoice for purchase #33221</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Billing Details</div>
                            <div class="panel-body">
                                <strong>David Peere:</strong><br>
                                1111 Army Navy Drive<br>
                                Arlington<br>
                                VA<br>
                                <strong>22 203</strong><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Payment Information</div>
                            <div class="panel-body">
                                <strong>Card Name:</strong> Visa<br>
                                <strong>Card Number:</strong> ***** 332<br>
                                <strong>Exp Date:</strong> 09/2020<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Order Preferences</div>
                            <div class="panel-body">
                                <strong>Gift:</strong> No<br>
                                <strong>Express Delivery:</strong> Yes<br>
                                <strong>Insurance:</strong> No<br>
                                <strong>Coupon:</strong> No<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Shipping Address</div>
                            <div class="panel-body">
                                <strong>David Peere:</strong><br>
                                1111 Army Navy Drive<br>
                                Arlington<br>
                                VA<br>
                                <strong>22 203</strong><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td>{{ $d->productName }}</td>
                                        <td class="text-center">{{ $d->productPrice }}</td>
                                        <td class="text-center">{{ $d->quantity }}</td>
                                        <td class="text-right">{{ $d->total }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>