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
        @include('alerts.alert')
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr class="text-center">
                        <td>
                            <img width="50px;" src="{{ asset('assets/images') }}/{{ $data->photo }}" alt="{{ $data->photo }}">
                        </td>
                        <td>
                            {{ $data->name }}
                        </td>
                        <td>
                            data
                        </td>
                        <td>
                            <a href="{{ route('dashboard.category.edit', $data->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-regular fa-edit"></i></a>
                            <a href="{{ route('dashboard.category.destroy', $data->id) }}" onclick="event.preventDefault(); document.getElementById('category-delete').submit();" class="btn btn-sm btn-danger"><i class="fas fa-regular fa-trash"></i></a>

                            <form id="category-delete" action="{{ route('dashboard.category.destroy', $data->id) }}" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
