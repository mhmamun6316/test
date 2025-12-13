@extends('layouts.app')

@section('styles')
    <style>
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #28a745;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Manage Offices</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.offices.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add New Office
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover" id="officesTable">
                <thead>
                    <tr>
                        <th width="25%">Title</th>
                        <th width="35%">Description</th>
                        <th width="10%">Order</th>
                        <th width="10%">Status</th>
                        <th width="15%">Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            let table = $('#officesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.offices.index') }}",
                    type: 'GET'
                },
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'description', name: 'description', render: function(data) {
                            return data.length > 100 ? data.substring(0, 100) + '...' : data;
                        }},
                    { data: 'sort_order', name: 'sort_order' },
                    { data: 'status', name: 'status', orderable: false, searchable: false },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ]
            });
        });

        function editOffice(id) {
            window.location.href = '/admin/offices/' + id + '/edit';
        }

        function deleteOffice(id) {
            if (confirm('Are you sure you want to delete this office?')) {
                $.ajax({
                    url: '/admin/offices/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        $('#officesTable').DataTable().ajax.reload();
                        alert('Office deleted successfully');
                    },
                    error: function () {
                        alert('Error deleting office');
                    }
                });
            }
        }

        function toggleStatus(id, element) {
            $.ajax({
                url: '/admin/offices/' + id + '/toggle-status',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log('Status updated successfully');
                },
                error: function () {
                    alert('Error updating status');
                }
            });
        }
    </script>
@endpush
