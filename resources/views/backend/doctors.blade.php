@extends('backend.layouts.backendLayout')
@section('title', 'Doctors')
@section('content') 
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Doctors</h1>
                            <div class="d-flex justify-content-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDoctorModal">
                                    Add New Doctor
                                </button>
                            </div>
                            <div class="alert alert-dismissible fade show" role="alert" id="alert-box1" style="display: none;">
                                <span id="alert-message"></span>
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
                                                    <input type="text" class="form-control" id="name" name="name" value="Dr." required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Doctor Profile</label>
                                                    <input type="file" class="form-control" id="image" name="image"  accept="image/*">
                                                </div>
                                                <div class="mb-3">
    <label for="departmentId" class="form-label">Department</label>
    <select class="form-control" id="departmentId" name="departmentId" required>
        <option value="">Select a Department</option>
       
       
    </select>
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
                                        <th>Image</th>
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

    var table = $('#doctors-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: baseUrl + '/doctors',
    columns: [
        { data: 'name', name: 'name' },
        { data: 'image', name: 'image',
        render: function (data, type, row) {
            console.log(row);
                return `<img src="{{asset('images/').'/'}}`+row.image+`" alt="Doctor Image" style="width:50px;height:50px;object-fit:cover;"/>`;
            }},
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
                    showAlert('Error retrieving doctor: ' + response.message, 'danger', 'alert-box');
                }
            },
            error: function() {
                showAlert('Error fetching doctor data.', 'danger', 'alert-box');
            }
        });
    });

    $('#addDoctorModal').on('hidden.bs.modal', function () {
        location.reload();
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
                loadDepartment(response.data.designation); 
                $('#saveBtn').text('Update Doctor');
            } else {
                showAlert('Error retrieving Doctor: ' + response.message, 'danger', 'alert-box');
            }
        },
        error: function(err) {
            showAlert('Error fetching Doctor data.', 'danger', 'alert-box');
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
    var formData = new FormData(this);

    $.ajax({
        url: formAction,
        method: formMethod,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status) {
                showAlert(response.message, 'success', 'alert-box');
                table.ajax.reload();
                setTimeout(function() {
                    window.location.href = baseUrl + '/doctors';
                }, 1000);
            } else {
                showAlert('Error: ' + response.message, 'danger', 'alert-box');
            }
        },
        error: function(response) {
            showAlert('Error saving doctor.', 'danger', 'alert-box');
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
                    _token: $('meta[name="csrf-token"]').attr('content') 
                },
                success: function(response) {
                    if (response.status) {
                        showAlert(response.message, 'success', 'alert-box1');
                        table.ajax.reload();
                        setTimeout(function() {
                            window.location.href = baseUrl + '/doctors'; 
                        }, 1000);
                    } else {
                        showAlert('Error: ' + response.message, 'danger', 'alert-box1');
                    }
                },
                error: function(response) {
                    showAlert('Error deleting doctor.', 'danger', 'alert-box1');
                }
            });
        }
    });

    function loadDepartment(selectedId = null) {
    $.ajax({
        url: baseUrl + '/department',
        method: 'GET',
        success: function(response) {
            if (response.status) {
                var dropdown = $('#departmentId');
                dropdown.empty();
                dropdown.append('<option value="" selected disabled>Select Department</option>');
                $.each(response.data, function(index, department) {
                    var selected = (selectedId && selectedId == department.id) ? 'selected' : '';
                    dropdown.append('<option value="' + department.id + '" ' + selected + '>' + department.department + '</option>');
                });
            }
        },
        error: function(error) {
            console.log('Error fetching departments:', error);
        }
    });
}



$('#addDoctorModal').on('show.bs.modal', function (e) {
    loadDepartment();
    $('#addDoctorModalLabel').text('Add New Doctor');
    $('#addDoctorForm').attr('action', baseUrl + '/doctors');
    $('#addDoctorForm').find('input[name="_method"]').remove();
    $('#name').val('Dr.').prop('disabled', false);
    $('#designation').prop('disabled', false);
    $('#saveBtn').text('Save Doctor');
    $('#button').show();
});

});


    </script>


@endsection
