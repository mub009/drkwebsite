<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
      data-theme="theme-default" data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template"
      data-style="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Doctors - CRM | Vuexy</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Activity log for CRM" />
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
                            <h1 class="card-title">Doctors</h1>
                            
                            <!-- Button to Open the Modal -->
                            <div class="d-flex justify-content-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDoctorModal">
                                    Add New Doctor
                                </button>
                            </div>
                            <!-- Modal for Adding New Doctor -->
                            <div class="modal fade" id="addDoctorModal" tabindex="-1" aria-labelledby="addDoctorModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            
                                            <h5 class="modal-title" id="addDoctorModalLabel">Add New Doctor</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                      
                                        <form id="addDoctorForm" action="{{ route('doctors.store') }}" method="POST">
                                            @csrf
                                            <div class="alert alert-dismissible fade show" role="alert" id="alert-box" style="display: none;">
                                                <span id="alert-message"></span>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="designation" class="form-label">Designation</label>
                                                    <textarea class="form-control" id="designation" name="designation" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer" id="button">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="saveBtn" class="btn btn-primary">Save Doctor</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Doctors Table -->
                            <table class="table table-bordered mt-4" id="doctors-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Created_at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
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
    function showAlert(message, type) {
        $('#alert-message').text(message);
        $('#alert-box').removeClass('alert-success alert-danger').addClass(`alert-${type}`).show();
        setTimeout(function() {
            $('#alert-box').fadeOut();
        }, 5000); 
    }

    if (sessionStorage.getItem('message')) {
        showAlert(sessionStorage.getItem('message'), 'success');
        sessionStorage.removeItem('message'); 
    }

    var table = $('#doctors-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + '/doctors',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'designation', name: 'designation' },
            { data: 'created_at', name: 'created_at' },
            {
                data: null,
                name: 'actions',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <button type="button" class="btn btn-info view-doctor" data-id="${row.id}">View</button>
                        <button type="button" class="btn btn-warning edit-doctor" data-id="${row.id}" data-bs-toggle="modal" data-bs-target="#addDoctorModal">Edit</button>
                        <button type="button" class="btn btn-danger delete-doctor" data-id="${row.id}">Delete</button>
                    `;
                }
            }
        ],
        order: [[2, 'desc']]
    });
    
    $(document).ready(function() {
    $('#doctors-table').on('click', '.view-doctor', function() {
        var doctorId = $(this).data('id');
        var viewUrl = baseUrl + '/doctors/' + doctorId + '/show';

        $.ajax({
            url: viewUrl,
            method: 'GET',
            success: function(response) {
                if (response.status) {
                    $('#addDoctorModalLabel').text('View Doctor');
                    $('#name').val(response.data.name).prop('disabled', true);
                    $('#designation').val(response.data.designation).prop('disabled', true);

                    $('#button').hide(); 

                    $('#addDoctorModal').modal('show');
                } else {
                    showAlert('Error retrieving doctor: ' + response.message, 'danger');
                }
            },
            error: function() {
                showAlert('Error fetching doctor data.', 'danger');
            }
        });
    });

    $('#addDoctorModal').on('hidden.bs.modal', function () {
        
        location.reload();
    });
});

    
    $('#doctors-table').on('click', '.edit-doctor', function() {
        var doctorId = $(this).data('id');
        var editUrl = baseUrl + '/doctors/' + doctorId + '/edit';

        $.ajax({
            url: editUrl,
            method: 'GET',
            success: function(response) {
                if (response.status) {
                    $('#addDoctorModalLabel').text('Edit Doctor');
                    $('#addDoctorForm').attr('action', baseUrl + '/doctors/' + doctorId);
                    $('#addDoctorForm').find('input[name="_method"]').remove(); 
                    $('#name').val(response.data.name);
                    $('#designation').val(response.data.designation);
                    $('#saveBtn').text('Update Doctor');
                } else {
                    showAlert('Error retrieving Doctor: ' + response.message, 'danger');
                }
            },
            error: function(err) {
                showAlert('Error fetching Doctor data.', 'danger');
            }
        });
    });

    
    $('#addDoctorForm').on('submit', function(e) {
        e.preventDefault();
        var formAction = $(this).attr('action');
        var formMethod = $('#saveBtn').text() === 'Update Doctor' ? 'PUT' : 'POST';
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
                    showAlert(response.message, 'success');
                    table.ajax.reload(); 
                    setTimeout(function() {
                            window.location.href = baseUrl + '/doctors'; 
                        }, 1000);
                } else {
                    showAlert('Error: ' + response.message, 'danger');
                }
            },
            error: function(response) {
                showAlert('Error saving doctor.', 'danger');
            }
        });
    });

    $('#doctors-table').on('click', '.delete-doctor', function() {
        if (confirm('Are you sure you want to delete this doctor?')) {
            var doctorId = $(this).data('id');
            var deleteUrl = baseUrl + '/doctors/' + doctorId;

            $.ajax({
                url: deleteUrl,
                method: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('designation') 
                },
                success: function(response) {
                    if (response.status) {
                        showAlert(response.message, 'success');
                        table.ajax.reload();
                        setTimeout(function() {
                            window.location.href = baseUrl + '/doctors'; 
                        }, 1000);
                    } else {
                        showAlert('Error: ' + response.message, 'danger');
                    }
                },
                error: function(response) {
                    showAlert('Error deleting doctor.', 'danger');
                }
            });
        }
    });
});

    </script>

</body>
</html>
