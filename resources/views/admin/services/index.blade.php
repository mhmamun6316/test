@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('about.services_list') }}</h1>
            @can('services.create')
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> {{ __('about.add_new_service') }}
            </a>
            @endcan
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="servicesTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('about.sort_order') }}</th>
                                <th>{{ __('about.front_title') }}</th>
                                <th>{{ __('about.front_image') }}</th>
                                <th>{{ __('about.back_title') }}</th>
                                <th>{{ __('about.back_image') }}</th>
                                <th>{{ __('about.status') }}</th>
                                <th>{{ __('about.actions') }}</th>
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
        var table = $('#servicesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.services.index') }}",
            columns: [
                { data: 'sort_order', name: 'sort_order' },
                { data: 'front_title', name: 'front_title' },
                { data: 'front_image', name: 'front_image', orderable: false, searchable: false },
                { data: 'back_title', name: 'back_title', defaultContent: 'N/A' },
                { data: 'back_image', name: 'back_image', orderable: false, searchable: false },
                { data: 'status', name: 'status', orderable: false, searchable: false },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            order: [[0, 'asc']] // Sort by Order by default
        });
    });

    function toggleStatus(serviceId, element) {
        var status = element.checked;
        $.ajax({
            url: '/admin/services/' + serviceId + '/toggle-status',
            method: 'POST',
            data: {
                status: status,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                toastr.success(response.message || '{{ __('common.status_updated') }}');
            },
            error: function(xhr) {
                element.checked = !status;
                toastr.error('{{ __('common.error') }}');
            }
        });
    }

    function deleteService(serviceId) {
        Swal.fire({
            title: '{{ __('about.confirm_delete') }}',
            text: "{{ __('common.delete_warning') }}",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: '{{ __('common.yes_delete') }}',
            cancelButtonText: '{{ __('common.cancel') }}'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/admin/services/' + serviceId,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#servicesTable').DataTable().ajax.reload();
                        Swal.fire('{{ __('common.deleted') }}', '{{ __('about.deleted_success') }}', 'success');
                    },
                    error: function(xhr) {
                        Swal.fire('{{ __('common.error') }}', '{{ __('common.delete_failed') }}', 'error');
                    }
                });
            }
        });
    }
</script>
@endpush
