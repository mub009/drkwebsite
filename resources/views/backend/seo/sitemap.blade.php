@extends('backend.layouts.backendLayout')
@section('title', 'AddDepartment')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css')}}" />
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-6">
                    <h5 class="card-header">SiteMap</h5>
                    <div class="card-body">
                        <form id="addDepartmentForm" class="is-invalid" novalidate action="{{ route('departments.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="department_details" class="form-label">SiteMap.xml</label>
                                <textarea class="form-control" id="department_details" name="department_details" rows="4"></textarea>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="d-flex justify-content-end">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js')}}"></script>
    <script>
        var departmentIndexUrl = "{{ route('departments.index') }}";
        var departmentStoreUrl = "{{ route('departments.store') }}";
    </script>
     <script src="{{ asset('assets/js/department-form-validation.js') }}"></script>
    @endsection