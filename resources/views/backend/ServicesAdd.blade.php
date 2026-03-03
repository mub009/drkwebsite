@extends('backend.layouts.backendLayout')
@section('title', 'Addservice')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-6">
                    <h5 class="card-header">Add Service</h5>
                    <div class="card-body">
                        <form id="addserviceForm" class="is-invalid" novalidate action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="service_en" class="form-label">Service Name  English</label>
                                <input type="text" class="form-control" id="service_en" name="service_en">
                            </div>
                            <div class="mb-3">
                                <label for="service_ar" class="form-label">Service Name English</label>
                                <input type="text" class="form-control" id="service_ar" name="service_ar">
                            </div>
                            
                            <div class="row justify-content-end">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('service.service') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                            <input type="hidden" name="content" id="content">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js')}}"></script>
    <script src="{{ asset('assets/js/service-form-validation.js') }}"></script>
    <script>
        var serviceIndexUrl = "{{ route('service.service') }}";
        var serviceStoreUrl = "{{ route('service.store') }}";
    </script>
    @endsection