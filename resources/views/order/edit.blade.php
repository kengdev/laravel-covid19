@extends('layouts/template')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Product</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/product">รายการซื้อสินค้า</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                แก้รายการซื้อสินค้า
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-md-12 col-lg-12 col-xlg-12">
                <div class="col-lg-12">
                    <form method="POST" action="{{ url('/orders/'.$order->id) }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf

                        @include('order.form')
                    </form>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        (function($) {
            $("#add_row").click(function(e) {
                e.preventDefault();

                var product_item = "<td>" + $('#product_body').find('td:first-child').next('td').html() +
                    "</td>";
                var quantity_item = "<td>" + $('#product_body').find('td:first-child').next('td').next()
                .html() + "</td>";

                var row =
                    "<td class='action'><a href='#' onclick='removeRow(this)' class='btn btn-danger btn-circle btn-sm d-inline-flex align-items-center justify-content-center'><i class='fa fa-trash'></i></a></td>" +
                    product_item + quantity_item;
                $('#product_body').append('<tr>' + row + '</tr>');

            });
        }(jQuery));

        function removeRow(item) {
            $(item).closest('tr').remove();
        }
    </script>
@endsection
