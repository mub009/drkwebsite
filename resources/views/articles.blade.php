<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
      data-theme="theme-default" data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template"
      data-style="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Articles - CRM | Vuexy</title>
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
                            <h1 class="card-title">Articles</h1>
                            <!-- Button to Open the Modal -->
                            <div class="d-flex justify-content-end mb-3">
                                <button type="button" class="btn btn-primary" id="addnewArticle" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                                    Add New Article
                                </button>
                            </div>
                            <!-- Modal for Adding New Article -->
                            <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addArticleModalLabel">Add New Article</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="addArticleForm" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="POST">
    <div class="alert alert-dismissible fade show" role="alert" id="alert-box" style="display: none;">
        <span id="alert-message"></span>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3" id="thumbnailImg">
            <label for="image" class="form-label">Thumbnail Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3" id="imgdiv" style="display: none;">
            <img id="articleImage" src="" alt="" width="100px" height="100px" >
            
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" required></textarea>
        </div>
    </div>
    <div class="modal-footer" id="button">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="saveBtn" class="btn btn-primary">Save Article</button>
    </div>
</form>

                                    </div>
                                </div>
                            </div>
                            <!-- Articles Table -->
                            <table class="table table-bordered mt-4" id="articles-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Content</th>
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
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            CKEDITOR.replace('content');
        });
    </script>
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

            $('#addnewArticle').on('click', function() {
        $('#addArticleModal').modal('show');
        $('#imgdiv').hide();

    });

            var table = $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: baseUrl + '/articles',
                columns: [
                    { data: 'title', name: 'title' },
                    {
                        data: null,
                        name: 'image',
                        orderable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            return `<img src="${row.image}" style="width: 50px; height: auto;">`;
                        }
                    },
                    {
                data: 'content',
                name: 'content',
                render: function (data, type, row) {
                    return data.replace(/<\/?p>/g, '');
                }
            },
                    { data: 'created_at', name: 'created_at' },
                    {
                        data: null,
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            return `
                                <button type="button" class="btn btn-info view-article" data-id="${row.id}">View</button>
                                <button type="button" class="btn btn-warning edit-article" data-id="${row.id}" data-bs-toggle="modal" data-bs-target="#addArticleModal">Edit</button>
                                <button type="button" class="btn btn-danger delete-article" data-id="${row.id}">Delete</button>
                            `;
                        }
                    }
                ],
                order: [[2, 'desc']]
            });

            $('#articles-table').on('click', '.view-article', function() {
                var articleId = $(this).data('id');
                var viewUrl = baseUrl + '/articles/' + articleId + '/show';

                $.ajax({
                    url: viewUrl,
                    method: 'GET',
                    success: function(response) {
                        if (response.status) {
                            $('#addArticleModalLabel').text('View Article');
                            $('#title').val(response.data.title).prop('disabled', true);
                            $('#content').val(response.data.content).prop('disabled', true);
                            $('#button').hide(); 
                            $('#addArticleModal').modal('show');
                            $('#thumbnailImg').hide(); 
                            var imageUrl = baseUrl + '/images/' + response.data.image;
                            $('#articleImage').attr('src', imageUrl);
                            $('#imgdiv').show();
                        } else {
                            showAlert('Error retrieving article: ' + response.message, 'danger');
                        }
                    },
                    error: function(xhr) {
                        showAlert('Error fetching article data: ' + (xhr.responseJSON.message || 'Unknown error'), 'danger');
                    }
                });
            });

            $('#addArticleModal').on('hidden.bs.modal', function () {
                $('#addArticleForm')[0].reset();
                $('#button').show();
                $('#title').prop('disabled', false);
                $('#content').prop('disabled', false);
                $('#saveBtn').text('Save Article');
            });

            $('#articles-table').on('click', '.edit-article', function() {
    var articleId = $(this).data('id');
    var editUrl = baseUrl + '/articles/' + articleId;

    $.ajax({
        url: editUrl,
        method: 'GET',
        success: function(response) {
            if (response.status) {
                $('#addArticleModalLabel').text('Edit Article');
                $('#addArticleForm').attr('action', editUrl);
                $('#addArticleForm').append('<input type="hidden" name="_method" value="PUT">');
                $('#title').val(response.data.title);
                $('#thumbnailImg').show(); 
                $('#content').val(response.data.content);
                $('#saveBtn').text('Update Article');
                $('#addArticleModal').modal('show');
            } else {
                showAlert('Error retrieving article: ' + response.message, 'danger');
            }
        },
        error: function(xhr) {
            showAlert('Error fetching article data: ' + (xhr.responseJSON.message || 'Unknown error'), 'danger');
        }
    });
});


            $('#addArticleForm').on('submit', function(e) {
                e.preventDefault();
                CKEDITOR.instances.content.updateElement();
                var formData = new FormData(this);
                var actionUrl = $(this).attr('action');
                var method = $(this).find('input[name="_method"]').val() || 'POST';
                var requestType = method === 'PUT' ? 'PUT' : 'POST';

                $.ajax({
                    url: actionUrl,
                    type: requestType,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status) {
                            table.ajax.reload();
                            $('#addArticleModal').modal('hide');
                            showAlert('Article saved successfully!', 'success');
                            sessionStorage.setItem('message', 'Article saved successfully!');
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        } else {
                            showAlert('Error saving article: ' + response.message, 'danger');
                        }
                    },
                    error: function(xhr) {
                        showAlert('Error saving article: ' + (xhr.responseJSON.message || 'Unknown error'), 'danger');
                    }
                });
            });
            $('#articles-table').on('click', '.delete-article', function() {
                if (confirm('Are you sure you want to delete this article?')) {
                    var articleId = $(this).data('id');
                    var deleteUrl = baseUrl + '/articles/' + articleId;

                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status) {
                                table.ajax.reload();
                                showAlert('Article deleted successfully!', 'success');
                                sessionStorage.setItem('message', 'Article deleted successfully!');
                                setTimeout(function() {
                                location.reload();
                            }, 2000);
                            } else {
                                showAlert('Error deleting article: ' + response.message, 'danger');
                            }
                        },
                        error: function(xhr) {
                            showAlert('Error deleting article: ' + (xhr.responseJSON.message || 'Unknown error'), 'danger');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
