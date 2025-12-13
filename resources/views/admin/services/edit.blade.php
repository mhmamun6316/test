@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('about.edit_service') }}</h1>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">{{ __('common.cancel') }}</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data" id="editServiceForm">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="sort_order" class="form-label">{{ __('about.sort_order') }}</label>
                            <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" value="{{ $service->sort_order }}" required>
                            @error('sort_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check mt-4">
                                <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" {{ $service->is_active ? 'checked' : '' }}>
                                <label for="is_active" class="form-check-label">{{ __('about.active') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Front Side -->
                        <div class="col-md-6">
                            <h4 class="mb-3">{{ __('about.front_side') }}</h4>
                            <div class="mb-3">
                                <label for="front_title" class="form-label">{{ __('about.front_title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="front_title" id="front_title" class="form-control @error('front_title') is-invalid @enderror" value="{{ $service->front_title }}">
                                @error('front_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="front_image" class="form-label">{{ __('about.front_image') }}</label>
                                <input type="file" name="front_image" id="front_image" class="form-control @error('front_image') is-invalid @enderror">
                                @error('front_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @if($service->front_image)
                                    <div class="mt-2">
                                        <img src="{{ asset($service->front_image) }}" alt="Current Front Image" class="img-thumbnail" style="max-height: 100px;">
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="front_description" class="form-label">{{ __('about.front_desc') }} <span class="text-danger">*</span></label>
                                <textarea name="front_description" id="front_description" class="form-control summernote">{{ $service->front_description }}</textarea>
                            </div>
                        </div>

                        <!-- Back Side -->
                        <div class="col-md-6">
                            <h4 class="mb-3">{{ __('about.back_side') }}</h4>
                            <div class="mb-3">
                                <label for="back_title" class="form-label">{{ __('about.back_title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="back_title" id="back_title" class="form-control" value="{{ $service->back_title }}">
                            </div>
                            <div class="mb-3">
                                <label for="back_image" class="form-label">{{ __('about.back_image') }}</label>
                                <input type="file" name="back_image" id="back_image" class="form-control">
                                @if($service->back_image)
                                    <div class="mt-2">
                                        <img src="{{ asset($service->back_image) }}" alt="Current Back Image" class="img-thumbnail" style="max-height: 100px;">
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="back_description" class="form-label">{{ __('about.back_desc') }} <span class="text-danger">*</span></label>
                                <textarea name="back_description" id="back_description" class="form-control summernote">{{ $service->back_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="button_text" class="form-label">{{ __('about.button_text') }}</label>
                                <input type="text" name="button_text" id="button_text" class="form-control" value="{{ $service->button_text }}">
                            </div>
                            <div class="mb-3">
                                <label for="button_link" class="form-label">{{ __('about.button_link') }}</label>
                                <input type="text" name="button_link" id="button_link" class="form-control" value="{{ $service->button_link }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('common.update') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('.summernote').summernote({
            height: 100
        });

        // jQuery Validation
        $("#editServiceForm").validate({
            ignore: ":hidden:not(.summernote),.note-editable.panel-body",
            rules: {
                sort_order: {
                    required: true,
                    number: true
                },
                front_title: {
                    required: true
                },
                front_description: {
                    required: true
                },
                back_title: {
                    required: true
                },
                back_description: {
                    required: true
                }
            },
            messages: {
                sort_order: {
                    required: "Please enter sort order",
                    number: "Please enter a valid number"
                },
                front_title: "Please enter front title",
                front_description: "Please enter front description",
                back_title: "Please enter back title",
                back_description: "Please enter back description"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                if (element.hasClass('summernote')) {
                     element.next('.note-editor').after(error);
                } else {
                    element.closest('.mb-3').append(error);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
@endpush
