@extends('layouts.dashboardApp')
@section('dashboardContent')
{{-- breadcrumb start --}}
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Categories</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fa fa-solid fa-house"></i></a></li>
                <li class="breadcrumb-item">Categories</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('dashboard.category.create') }}" class="btn btn-primary">Add <i class="fa fa-regular fa-plus"></i></a>
        </div>
    </div>
</div>
{{-- breadcrumb ends --}}
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('aditionalJS')

<script src="{{ asset('dashboard_assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/js/table-datatable.js"></script>
@endsection
@section('aditionalCss')
<link href="{{ asset('dashboard_assets') }}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
