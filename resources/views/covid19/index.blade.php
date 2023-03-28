@extends('layouts/template')
@section('css')
    <style>
        .right {
            text-align: right;
            width:100%;
        }
        td.action{
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Home</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
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
                <div class="col-lg-4">
                    <form action="{{ url('/covid19') }}" method="GET" class="my-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" value="" />
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-8 right">
                    <a href="/covid19/create" class="btn btn-danger">เพิ่มข้อมูล</a>
                </div>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Country</th>
                            <th>Total</th>
                            <th>Active</th>
                            <th>Death</th>
                            <th>Recovered</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($covid19s as $item)
                            <tr>
                                <td>{{ $item->date }}</td>
                                <td class="text-country">{{ $item->country }}</td>
                                <td class="text-right">{{ number_format($item->total) }}</td>
                                <td class="text-right">{{ number_format($item->active) }}</td>
                                <td class="text-right">{{ number_format($item->death) }}</td>
                                <td class="text-right">{{ number_format($item->recovered) }}</td>
                                <td class="action">
                                    <a href="{{ url('/covid19/' . $item->id . '/edit') }}" class="btn btn-xs btn-warning">Edit</a>
                                    <form method="POST"
                                        action="{{ url('/covid19' . '/' . $item->id) }}"
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
                <div class="mt-4">{{ $covid19s->links() }}</div>
            </div>
            <!-- Column -->
        </div>
    </div>
@endsection
