@extends("layouts/template")
@section("content")
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
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Country</th>
                        <th>Total</th>
                        <th>Active</th>
                        <th>Death</th>
                        <th>Recovered</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reports as $item)
                        <tr>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->country }}</td>
                            <td class="text-right">{{ number_format($item->total) }}</td>
                            <td class="text-right">{{ number_format($item->active) }}</td>
                            <td class="text-right">{{ number_format($item->death) }}</td>
                            <td class="text-right">{{ number_format($item->recovered) }}</td>

                        </tr>
                    @endforeach
                </tbody>
        </div>
        <!-- Column -->
    </div>
</div>
@endsection
