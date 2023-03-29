@extends('layouts/template')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Produt</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/product">รายการสินค้า</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                รายละเอียดสินค้า
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xlg-12">
                <h3>{{ $order->customer_name }}</h3>
                <h3>{{ $order->customer_email }}</h3>
                <table class="table" id="products_table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody id="product_body">
                        @foreach ($order->products as $item)
                            <tr>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    <span>{{ $item->pivot->quantity }} x {{ $item->price }}</span>
                                </td>
                                <td>
                                    @php
                                        $total = $item->pivot->quantity * $item->price;

                                    @endphp
                                    <span>{{ $total }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Column -->
        </div>
        <div>
            <a href="/product">กลับหน้าหลัก</a>
        </div>
    </div>
@endsection
