@extends('layouts/template')
@section('css')
    <style>
        .right {
            text-align: right;
            width:100%;
        }
        td.action{
            text-align: center;
            width:250px;
        }
    </style>
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Product</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/product">รายการสินค้า</a></li>
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
                <div class="col-lg-4">
                    <form action="{{ url('/product') }}" method="GET" class="my-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" value="" />
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-8 right">
                    <a href="/product/create" class="btn btn-danger">เพิ่มข้อมูล</a>
                </div>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td class="text-country">{{ $item->name }}</td>
                                <td class="text-right">{{ number_format($item->price) }}</td>

                                <td class="action">
                                    <a href="{{ url('/product/' . $item->id) }}" class="btn btn-xs btn-info">Show</a>
                                    <a href="{{ url('/product/' . $item->id . '/edit') }}" class="btn btn-xs btn-warning">Edit</a>

                                    <form method="POST"
                                        action="{{ url('/product' . '/' . $item->id) }}"
                                        style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-xs btn-danger"
                                            onclick="return confirm('Confirm delete?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">{{ $products->links() }}</div>
            </div>
            <!-- Column -->
        </div>
    </div>
@endsection
