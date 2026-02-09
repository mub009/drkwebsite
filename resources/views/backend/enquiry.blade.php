@extends('backend.layouts.backendLayout')
@section('title', 'Social Media')
@section('content')
<div id="content-area">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Enquiry</h1>
            <!-- <div class="d-flex justify-content-end mb-3">
                <a href=""><button type="button" class="btn btn-primary">
                        Export Enquiry
                    </button></a>
            </div> -->
            <div class="alert alert-dismissible fade show" role="alert" id="alert-box1" style="display: none;">
                <span id="alert-message"></span>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered mt-4" id="enquiry-table">
                    <thead>
                        <tr>
                            <th>Enquiry Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Branch</th>
                            <th>Email</th>
                            <!-- <th>Created At</th>
                            <th>Actions</th> -->
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
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#enquiry-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('enquiry.dataTablesForEnquiry') }}",
            columns: [{
                    data: 'enquiryId',
                    name: 'enquiryId',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'phone',
                    name: 'phone',
                },
                {
                    data: 'branch',
                    name: 'branch',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                // {
                //     data: 'created_at',
                //     name: 'created_at'
                // },
                // {
                //     data: null,
                //     name: 'actions',
                //     orderable: false,
                //     searchable: false,
                //     render: function(data, type, row) {
                //         return `
                //     <button type="button" class="btn btn-info view-socialmedia" data-id="${row.id}"><i class="fa-solid fa-eye"></i></button>
                //     <button type="button" class="btn btn-warning edit-socialmedia" data-id="${row.id}"><i class="fa-solid fa-pen-to-square"></i></button>
                //     <button type="button" class="btn btn-danger delete-socialmedia" data-id="${row.id}"><i class="fa-solid fa-trash"></i></button>
                // `;
                //     }
                // }
            ],
            dom: '<"row"' +
                '<"col-md-2"<"ms-n2"l>>' +
                '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-6 mb-md-0 mt-n6 mt-md-0"fB>>' +
                ">rt" +
                '<"row"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                ">",
            buttons: [{
                extend: "excelHtml5",
                title: "Enquiry Report",
                text: '<i class="fa fa-file-excel-o me-0 me-sm-1 ti-xs"></i> <span class="d-none d-sm-inline-block">Export to Excel</span>',
                className: "btn btn-primary waves-effect waves-light",
                exportOptions: {
                    columns: ':visible'

                },
            }, ],
            order: [
                [0, 'desc']
            ]
        });
    });
</script>
@endsection