@extends('backend.layouts.backendLayout')

@section('title', 'View Department')

@section('content')
<div id="content-area">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Department English Name:</h3>
            <div>{!!  $department->department_en !!}</div>
            <h3 class="card-title">Department Arabic Name:</h3>
            <div>{!!  $department->department_ar !!}</div>
            <p><strong>Created at:</strong> {{ $department->created_at->format('Y-m-d H:i:s') }}</p>
            
            <a href="{{ route('departments.index') }}" class="btn btn-primary">Back to Departments</a>
        </div>
    </div>
</div>
@endsection