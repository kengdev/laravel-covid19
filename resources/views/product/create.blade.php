@extends('layouts/template')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Product</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/product">รายการสินค้า</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                เพิ่มรายการสินค้า
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
                    <form method="POST" action="{{ url('/product') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf

                        @include('product.form')
                    </form>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
@endsection
