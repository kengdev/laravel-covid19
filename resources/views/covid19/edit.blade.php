@extends('layouts/template')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Covid19</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/covid19">รายการผู้ติดเชื้อโควิด19</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                แก้ไขรายการ
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
                    <form method="POST" action="{{ url('/covid19/'.$covid19->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        @include('covid19.form')
                    </form>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
@endsection
