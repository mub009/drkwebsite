@extends('backend.layouts.backendLayout')
@section('title', 'Edit service')
@section('content')
<div id="content-area">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Edit service</h1>
            <form id="service-form" class="is-invalid" novalidate action="{{ route('service.update', $services->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3" style="display:none;">
                    <label for="id" class="form-label">ID</label>
                    <input type="hidden" class="form-control" name="id" value="{{$id}}">
                </div>
                <div class="mb-3">
                    <label for="service_en" class="form-label">service Name English </label>
                    <input type="text"
                        class="form-control"
                        name="service_en"
                         id="service_en"
                        value="{{ old('service_en', $services->service_en) }}">
                </div>
                <div class="mb-3">
                    <label for="service_ar" class="form-label">service Name Arabic </label>
                    <input type="text" class="form-control" id="service_ar" name="service_ar" value="{{ old('service_ar', $services->service_ar) }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('service.service') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{ asset('assets/js/service-edit-validation.js') }}"></script>
<script src="{{ asset('assets/js/service-edit-validation.js') }}"></script>
<script>
    var serviceIndexUrl = "{{ route('service.service') }}";
</script>
@endsection