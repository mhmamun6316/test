@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('about.sections_list') }}</h1>
            @can('about_sections.create')
            <a href="{{ route('admin.about-sections.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> {{ __('about.add_new_section') }}
            </a>
            @endcan
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="sectionsTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('about.sort_order') }}</th>
                                <th>{{ __('about.section_type') }}</th>
                                <th>{{ __('about.title') }}</th>
                                <th>{{ __('about.image') }}</th>
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
        var table = $('#sectionsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.about-sections.index') }}",
            columns: [
                { data: 'sort_order', name: 'sort_order' },
                { data: 'type', name: 'type' },
                { data: 'title', name: 'title', defaultContent: 'N/A' },
                { data: 'image', name: 'image', orderable: false, searchable: false },
                { data: 'status', name: 'status', orderable: false, searchable: false },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            order: [[0, 'asc']] // Sort by Order by default
        });
    });

    function toggleStatus(sectionId, element) {
        var status = element.checked;
        $.ajax({
            url: '/admin/about-sections/' + sectionId + '/toggle-status',
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

    function deleteSection(sectionId) {
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
                    url: '/admin/about-sections/' + sectionId,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#sectionsTable').DataTable().ajax.reload();
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
