@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Values List</h1>
            <a href="{{ route('admin.values.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Add New Value
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="valuesTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- DataTables will populate this -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#valuesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.values.index') }}",
            columns: [
                { data: 'sort_order', name: 'sort_order' },
                { data: 'icon', name: 'icon', orderable: false, searchable: false },
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'status', name: 'status', orderable: false, searchable: false },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            order: [[0, 'asc']] // Sort by Order by default
        });
    });

    function toggleStatus(valueId, element) {
        var status = element.checked;
        $.ajax({
            url: '/admin/values/' + valueId + '/toggle-status',
            method: 'POST',
            data: {
                status: status,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                toastr.success(response.message || 'Status updated successfully');
            },
            error: function(xhr) {
                element.checked = !status;
                toastr.error('An error occurred');
            }
        });
    }

    function deleteValue(valueId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/admin/values/' + valueId,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#valuesTable').DataTable().ajax.reload();
                        Swal.fire('Deleted!', 'Value has been deleted.', 'success');
                    },
                    error: function(xhr) {
                        Swal.fire('Error!', 'Failed to delete value.', 'error');
                    }
                });
            }
        });
    }
</script>
@endpush
