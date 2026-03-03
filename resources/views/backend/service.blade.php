@extends('backend.layouts.backendLayout')
@section('title', 'service')
@section('content')
<div id="content-area">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Service</h1>
            <div class="d-flex justify-content-end mb-3">
                <a href="{{route('service.add')}}"><button type="button" class="btn btn-primary">
                        Add New Service
                    </button></a>
            </div>
            <div class="alert alert-dismissible fade show" role="alert" id="alert-box1" style="display: none;">
                <span id="alert-message"></span>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered mt-4" id="service-table">
                    <thead>
                        <tr>
                            <th>Service Name English</th>
                            <th>Service Name Arabic</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        function showAlert(message, type, alertBoxId) {
            $('#' + alertBoxId + ' #alert-message').text(message);
            $('#' + alertBoxId).removeClass('alert-success alert-danger').addClass(`alert-${type}`).show();
            setTimeout(function() {
                $('#' + alertBoxId).fadeOut();
            }, 1000);
        }
        if (sessionStorage.getItem('addMessage')) {
            showAlert(sessionStorage.getItem('addMessage'), 'success', 'alert-box1');
            sessionStorage.removeItem('addMessage');
        }
        $('#service-table').on('click', '.edit-service', function() {
            var serviceId = $(this).data('id');
            window.location.href = "{{ url('service') }}/" + serviceId + "/edit";
        });
        var table = $('#service-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('service.dataTablesForservice') }}",
            columns: [{
                    data: 'service_en',
                    name: 'service_en'
                },
                {
                    data: 'service_ar',
                    name: 'service_ar'
                },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                    <button type="button" class="btn btn-warning edit-service" data-id="${row.id}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button type="button" class="btn btn-danger delete-service" data-id="${row.id}">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                `;
                    }
                }
            ],
            order: [
                [0, 'desc']
            ]
        });
        $('#service-table').on('click', '.edit-service', function() {
            var serviceId = $(this).data('id');
            window.location.href = "{{ url('service') }}/" + serviceId + "/edit";
        });
        $('#service-table').on('click', '.delete-service', function() {
            var serviceId = $(this).data('id');
            var button = $(this);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary waves-effect waves-light',
                    cancelButton: 'btn btn-secondary waves-effect ms-1'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('service') }}/" + serviceId + "/delete",
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    title: 'Deleted!',
                                    text: 'Service deleted successfully!',
                                    icon: 'success',
                                    customClass: {
                                        confirmButton: 'btn btn-primary waves-effect waves-light'
                                    },
                                    buttonsStyling: false
                                }).then(() => {
                                    var table = $('#service-table').DataTable();
                                    var row = button.closest('tr');
                                    table.row(row).remove().draw();
                                });
                            } else {
                                Swal.fire('Error!', response.message, 'error');
                            }
                        },
                        error: function(xhr) {
                            Swal.fire('Error!', xhr.responseJSON?.message || 'Unknown error occurred.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection