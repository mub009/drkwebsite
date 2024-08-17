<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
      data-theme="theme-default" data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template"
      data-style="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Departments - CRM | Vuexy</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Department for CRM" />
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-default.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet" />
    <script>
        var baseUrl = "{{ url('/') }}";
    </script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('partials.sidebar')

            <div class="layout-page">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Departments</h1>
                            
                            <!-- Button to Open the Modal -->
                            <div class="d-flex justify-content-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                    Add New Department
                                </button>
                            </div>
                            <div class="alert alert-dismissible fade show" role="alert" id="alert-box1" style="display: none;">
                                <span id="alert-message"></span>
                            </div>
                            <!-- Modal for Adding New Department -->
                            <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addDepartmentModalLabel">Add New Department</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="addDepartmentForm" action="{{ route('departments.store') }}" method="POST">
                                            @csrf
                                            <div class="alert alert-dismissible fade show" role="alert" id="alert-box" style="display: none;">
                                                <span id="alert-message"></span>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="department" class="form-label">Department</label>
                                                    <input type="text" class="form-control" id="department" name="department" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer" id="button">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="saveBtn" class="btn btn-primary">Save Department</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Department Table -->
                            <table class="table table-bordered mt-4" id="departments-table">
                                <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTables will populate this body -->
                                </tbody>
                            </table>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            function showAlert(message, type, alertId) {
                $('#' + alertId + ' #alert-message').text(message);
                $('#' + alertId).removeClass('alert-success alert-danger').addClass(`alert-${type}`).show();
                setTimeout(function() {
                    $('#' + alertId).fadeOut();
                }, 5000);
            }

            if (sessionStorage.getItem('message')) {
                showAlert(sessionStorage.getItem('message'), 'success', 'alert-box');
                sessionStorage.removeItem('message');
            }

            var table = $('#departments-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: baseUrl + '/departments',
                columns: [
                    { data: 'department', name: 'department' },
                    { data: 'created_at', name: 'created_at' },
                    {
                        data: null,
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            return `
                                <button type="button" class="btn btn-info view-department" data-id="${row.id}">View</button>
                                <button type="button" class="btn btn-warning edit-department" data-id="${row.id}" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">Edit</button>
                                <button type="button" class="btn btn-danger delete-department" data-id="${row.id}">Delete</button>
                            `;
                        }
                    }
                ],
                order: [[1, 'desc']]
            });

            $('#departments-table').on('click', '.view-department', function() {
                var departmentId = $(this).data('id');
                var viewUrl = baseUrl + '/departments/' + departmentId + '/show';

                $.ajax({
                    url: viewUrl,
                    method: 'GET',
                    success: function(response) {
                        if (response.status) {
                            $('#addDepartmentModalLabel').text('View Department');
                            $('#department').val(response.data.department).prop('disabled', true);

                            $('#button').hide(); 

                            $('#addDepartmentModal').modal('show');
                        } else {
                            showAlert('Error retrieving department: ' + response.message, 'danger', 'alert-box');
                        }
                    },
                    error: function() {
                        showAlert('Error fetching department data.', 'danger', 'alert-box');
                    }
                });
            });

            $('#addDepartmentModal').on('hidden.bs.modal', function () {
                location.reload();
            });

            $('#departments-table').on('click', '.edit-department', function() {
                var departmentId = $(this).data('id');
                var editUrl = baseUrl + '/departments/' + departmentId + '/edit';

                $.ajax({
                    url: editUrl,
                    method: 'GET',
                    success: function(response) {
                        if (response.status) {
                            $('#addDepartmentModalLabel').text('Edit Department');
                            $('#addDepartmentForm').attr('action', baseUrl + '/departments/' + departmentId);
                            $('#addDepartmentForm').find('input[name="_method"]').remove();
                            $('#department').val(response.data.department).prop('disabled', false);
                            $('#saveBtn').text('Update Department');
                            $('#button').show();
                        } else {
                            showAlert('Error retrieving Department: ' + response.message, 'danger', 'alert-box');
                        }
                    },
                    error: function(err) {
                        showAlert('Error fetching Department data.', 'danger', 'alert-box');
                    }
                });
            });

            $('#addDepartmentForm').on('submit', function(e) {
                e.preventDefault();
                var formAction = $(this).attr('action');
                var formMethod = $('#saveBtn').text() === 'Update Department' ? 'PUT' : 'POST';
                $(this).find('input[name="_method"]').remove();
                if (formMethod === 'PUT') {
                    $(this).append('<input type="hidden" name="_method" value="PUT">');
                }

                $.ajax({
                    url: formAction,
                    method: formMethod,
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status) {
                            showAlert(response.message, 'success', 'alert-box');
                            table.ajax.reload();
                            setTimeout(function() {
                                window.location.href = baseUrl + '/departments'; 
                            }, 1000);
                        } else {
                            showAlert('Error: ' + response.message, 'danger', 'alert-box');
                        }
                    },
                    error: function(response) {
                        showAlert('Error saving department.', 'danger', 'alert-box');
                    }
                });
            });

            $('#departments-table').on('click', '.delete-department', function() {
                if (confirm('Are you sure you want to delete this department?')) {
                    var departmentId = $(this).data('id');
                    var deleteUrl = baseUrl + '/departments/' + departmentId;

                    $.ajax({
                        url: deleteUrl,
                        method: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content') 
                        },
                        success: function(response) {
                            if (response.status) {
                                showAlert(response.message, 'success', 'alert-box1');
                                table.ajax.reload();
                                setTimeout(function() {
                                    window.location.href = baseUrl + '/departments'; 
                                }, 1000);
                            } else {
                                showAlert('Error: ' + response.message, 'danger', 'alert-box1');
                            }
                        },
                        error: function(response) {
                            showAlert('Error deleting department.', 'danger', 'alert-box1');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
