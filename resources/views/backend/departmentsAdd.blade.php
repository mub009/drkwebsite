<!-- resources/views/home.blade.php -->
@extends('backend.layouts.backendLayout')

@section('title', 'AddDepartment')

@section('content')

<!-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css')}}" /> -->

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        
        <!-- Snow Theme -->
        <div class="col-12">
          <div class="card mb-6">
            <h5 class="card-header">Add Department</h5>
            <div class="card-body">
            <form id="addDepartmentForm" action="{{ route('departments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="department_en" class="form-label">Department(English)</label>
                    <input type="text" class="form-control" id="department_en" name="department_en" required>
                </div>
                <div class="mb-3">
                    <label for="department_ar" class="form-label">Department(Arabic)</label>
                    <input type="text" class="form-control" id="department_ar" name="department_ar" required>
                </div>
                <div class="mb-3" id="departmentImg">
                    <label for="image" class="form-label">Department Image</label>
                    <input type="file" class="form-control" id="image" name="image"  accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="department_details" class="form-label">Department Details</label>
                    <textarea class="form-control" id="department_details" name="department_details" rows="4" required></textarea>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
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
 

<script>
$(document).ready(function () {
$('#addDepartmentForm').on('submit', function(e) {
    e.preventDefault();  // Prevent default form submission
    var formData = new FormData(this);

    $.ajax({
        url: "{{ route('departments.store') }}",  // Ensure this is the correct URL
        type: 'POST',  // Ensure the request method is POST
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status) {
                Swal.fire({
                    title: 'Good job!',
                    text: 'Department created successfully!',
                    icon: 'success',
                    customClass: {
                        confirmButton: 'btn btn-primary waves-effect waves-light'
                    },
                    buttonsStyling: false
                }).then(() => {
                    window.location.href = "{{route('departments.index')}}";
                });
            } else {
                console.log('Error saving department: ' + response.message);
            }
        },
        error: function(xhr) {
            console.log('Error saving department: ' + (xhr.responseJSON.message || 'Unknown error'));
        }
    });
});   
});
</script>
@endsection