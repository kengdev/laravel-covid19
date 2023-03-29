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
                                รายละเอียดผู้ติดเชื้อโควิด19
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
                <h2>{{ $covid19->country }} [{{ $covid19->date }}]</h2>
                <div>
                    Total: {{ number_format($covid19->total) }}
                </div>
                <div>
                    Active: {{ number_format($covid19->active) }}
                </div>
                <div>
                    Recovered: {{ number_format($covid19->recovered) }}
                </div>
            </div>
            <!-- Column -->
        </div>
        <div>
            <a href="/covid19">กลับหน้าหลัก</a>
        </div>
    </div>

@endsection
