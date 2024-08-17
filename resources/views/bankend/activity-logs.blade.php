<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
      data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template"
      data-style="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Activity Log - CRM | Vuexy</title>
    <meta name="description" content="Activity log for CRM" />
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-default.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
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
                            <h1 class="card-title">Activity Log</h1>
                            <table class="table table-bordered" id="activity-log-table">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>Action</th>
                                        <th>Agent</th>
                                        <th>IP Address</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#activity-log-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: baseUrl + '/load-content/activities',
                columns: [
                    { data: 'user_id', name: 'user_id' },
                    { data: 'action', name: 'action' },
                    { data: 'agent', name: 'agent' },
                    { data: 'ip_address', name: 'ip_address' },
                    { data: 'created_at', name: 'created_at' }
                ],
                order: [[4, 'desc']]
            });
        });
    </script>
</body>
</html>