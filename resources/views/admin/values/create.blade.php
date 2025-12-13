@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Create New Value</h6>
                <a href="{{ route('admin.values.index') }}" class="btn btn-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.values.store') }}" method="POST" enctype="multipart/form-data" id="createValueForm">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="icon" class="form-label">Icon (Image) <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
                        @error('icon')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="sort_order" class="form-label">Sort Order <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                        @error('sort_order')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                            <label class="form-check-label" for="is_active">Active Status</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Value</button>
                    <a href="{{ route('admin.values.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $("#createValueForm").validate({
            rules: {
                title: { required: true },
                description: { required: true },
                icon: { required: true, extension: "jpg|jpeg|png|gif|svg" },
                sort_order: { required: true, number: true }
            },
            messages: {
                title: "Please enter a title",
                description: "Please enter a description",
                icon: {
                    required: "Please select an icon image",
                    extension: "Please select a valid image file (jpg, jpeg, png, gif, svg)"
                },
                sort_order: "Please enter a valid sort order"
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                error.addClass('text-danger small mt-1');
                error.insertAfter(element);
            }
        });
    });
</script>
@endpush
