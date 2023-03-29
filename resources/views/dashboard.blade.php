@extends('layouts/template')
@section('title', 'Order List')
@section('content')

@section('css')
    <style>
        .text-right {
            text-align: right;
        }

        .action {
            text-align: center;
            width: 180px;
        }
    </style>
@endsection
<div class="page-breadcrumb border-bottom">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">หน้าหลัก</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid page-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex border-bottom title-part-padding align-items-center">
                    <div>
                        <h4 class="card-title mb-0">Dashboard</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h1>This is dashboard room.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
