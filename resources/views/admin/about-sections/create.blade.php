@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('about.create_section') }}</h1>
            <a href="{{ route('admin.about-sections.index') }}" class="btn btn-secondary">{{ __('common.cancel') }}</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('admin.about-sections.store') }}" method="POST" enctype="multipart/form-data" id="createSectionForm">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">{{ __('about.section_type') }}</label>
                            <select name="type" id="type" class="form-select">
                                <option value="content_image">{{ __('about.type_content_image') }}</option>
                                <option value="intro">{{ __('about.type_intro') }}</option>
                                <option value="full_width_image">{{ __('about.type_full_image') }}</option>
                                <option value="quote">{{ __('about.type_quote') }}</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="sort_order" class="form-label">{{ __('about.sort_order') }}</label>
                            <input type="number" name="sort_order" id="sort_order" class="form-control" value="0">
                        </div>
                    </div>

                    <div class="mb-3" id="titleGroup">
                        <label for="title" class="form-label">{{ __('about.title') }}</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3" id="subtitleGroup">
                        <label for="subtitle" class="form-label">{{ __('about.subtitle') }}</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control">
                    </div>

                    <div class="mb-3" id="contentGroup">
                        <label for="content" class="form-label">{{ __('about.content') }}</label>
                        <input type="text" name="content" id="content" class="form-control">
                    </div>

                    <div class="row mb-3" id="imageGroup">
                        <div class="col-md-6">
                            <label for="image" class="form-label">{{ __('about.image') }}</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="col-md-6" id="positionGroup">
                            <label for="image_position" class="form-label">{{ __('about.image_position') }}</label>
                            <select name="image_position" id="image_position" class="form-select">
                                <option value="left">{{ __('common.left') }}</option>
                                <option value="right">{{ __('common.right') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
                        <label for="is_active" class="form-check-label">{{ __('about.active') }}</label>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('common.save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('type');
        const titleGroup = document.getElementById('titleGroup');
        const subtitleGroup = document.getElementById('subtitleGroup');
        const contentGroup = document.getElementById('contentGroup');
        const imageGroup = document.getElementById('imageGroup');
        const positionGroup = document.getElementById('positionGroup');

        // Hide Summernote container properly when hiding content
        function toggleContent(show) {
            if (show) {
                $('#content').closest('.mb-3').show();
            } else {
                $('#content').closest('.mb-3').hide();
            }
        }

        function toggleSummernote(enable) {
            if (enable) {
                $('#content').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link']],
                        ['view', ['codeview']]
                    ]
                });
            } else {
                $('#content').summernote('destroy');
            }
        }

        function updateFields() {
            const type = typeSelect.value;

            // Reset all
            titleGroup.style.display = 'block';
            subtitleGroup.style.display = 'block';
            toggleContent(true);
            imageGroup.style.display = 'flex';
            positionGroup.style.display = 'block';

            // Default: Enable Summernote
            toggleSummernote(true);

            if (type === 'intro') {
                imageGroup.style.display = 'none';
            } else if (type === 'content_image') {
                // User requested: Only content, image, and position for content_image
                titleGroup.style.display = 'none';
                subtitleGroup.style.display = 'none';
            } else if (type === 'full_width_image') {
                titleGroup.style.display = 'none';
                subtitleGroup.style.display = 'none';
                toggleContent(false);
                positionGroup.style.display = 'none';
            } else if (type === 'quote') {
                titleGroup.style.display = 'none';
                subtitleGroup.style.display = 'none';
                imageGroup.style.display = 'none';
                // User requested: Text only for quote (disable Summernote)
                toggleSummernote(false);
            } else if (type === 'services') {
                toggleContent(false);
                imageGroup.style.display = 'none';
                positionGroup.style.display = 'none';
            }
        }

        typeSelect.addEventListener('change', updateFields);

        // Initial setup - wait for document ready to ensure summernote is loaded
        // We initialize summernote first, then updateFields will destroy it if needed
        $('.summernote').summernote({
             height: 200,
             toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['codeview']]
             ]
        });

        updateFields();

        // jQuery Validation
        $("#createSectionForm").validate({
            ignore: ":hidden:not(.summernote),.note-editable.panel-body",
            rules: {
                type: { required: true },
                sort_order: { required: true, number: true },
                // Dynamic rules can be handled, but basics for now
                title: {
                    required: function() { return ['intro'].includes($('#type').val()); }
                },
                content: {
                    required: function() { return ['intro', 'content_image', 'quote'].includes($('#type').val()); }
                },
                image: {
                    required: function() { return ['content_image', 'full_width_image'].includes($('#type').val()); },
                    extension: "jpg|jpeg|png|gif|svg"
                }
            },
            messages: {
                type: "Please select a type",
                sort_order: { required: "Please enter sort order", number: "Please enter a valid number" },
                title: "Please enter a title",
                content: "Please enter content",
                image: "Please select an image"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                if (element.hasClass('summernote')) {
                     element.next('.note-editor').after(error);
                } else {
                    element.closest('.mb-3, .col-md-6').append(error);
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
