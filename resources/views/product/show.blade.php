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
                <h2>{{ $product->name }}</h2>
                <h3>
                    Price: {{ number_format($product->price) }}
                </h3>
            </div>
            <!-- Column -->
        </div>
        <div>
            <a href="/product">กลับหน้าหลัก</a>
        </div>
    </div>

@endsection
