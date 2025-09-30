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
                        <form id="addDepartmentForm" class="is-invalid" novalidate action="{{ route('sitemap.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="sitemap_xml" class="form-label">SiteMap.xml</label>
                                <textarea class="form-control" id="sitemap_xml" name="sitemap_xml" rows="4"></textarea>
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
        var sitemapIndexUrl = "{{ route('admin.sitemap') }}";
        var sitemapStoreUrl = "{{ route('sitemap.store') }}";
    </script>
     <script src="{{ asset('assets/js/department-form-validation.js') }}"></script>
    @endsection