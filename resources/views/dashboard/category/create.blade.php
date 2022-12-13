@extends('layouts.dashboardApp')
@section('dashboardContent')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Create Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.category.index') }}">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Category</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('dashboard.category.index') }}" class="btn btn-primary"><i
                    class="fas fa-regular fa-chevron-left"></i> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-7 mx-auto">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0 text-primary">Create Category</h5>
                </div>
                <hr>
                <form class="row g-3" action="{{ route('dashboard.category.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <label for="inputFirstName" class="form-label">Set Image*</label>
                        <input id="fancy-file-upload" type="file" name="photo"
                            accept=".jpg, .png, image/jpeg, image/png" class="ff_fileupload_hidden" required>
                    </div>
                    <div class="col-12">
                        <label for="inputFirstName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control item-name" placeholder="Enter Name">
                    </div>
                    <div class="col-12">
                        <label for="inputFirstName" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
                    </div>
                    <div class="col-12">
                        <label for="inputFirstName" class="form-label">Meta Keyword</label>
                        <input type="text" name="meta_key" class="form-control tags" placeholder="Enter Meta Keywords">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Meta Description</label>
                        <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description" rows="4"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('aditionalJS')
<script src="{{ asset('dashboard_assets') }}/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/js/form-file-upload.js"></script>
<script src="{{ asset('dashboard_assets') }}/js/tagify.js"></script>
@endsection
@section('aditionalCss')
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/css/tagify.css">
<link href="{{ asset('dashboard_assets') }}/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
<link href="{{ asset('dashboard_assets') }}/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
@endsection
