@section('title')
Categories
@endsection
@extends('admin.master')
@push('css')
<link rel="stylesheet" href="{{ url('assets/admin/css/image/image.css') }}">
@endpush
@section('content')

<div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h5 class="mdl-card__title-text text-color--white">Create Category</h5>
            </div>
            <div class="mdl-card__supporting-text">
                <form class="form form--basic" 
                    action="{{ !empty($data) ? route('admin.category.update', ['id' => $data->id ]) : route('admin.category.store') }}" 
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @if(isset($data))
                    @method('PUT')
                    @endif
                    <div class="mdl-grid">
                        <div
                            class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone form__article">
                            <div class="mdl-textfield mdl-js-textfield full-size">
                                <input class="mdl-textfield__input" type="text" id="name" name="name"
                                    value="{{ !empty($data) ? $data->name : "" }}">
                                <label class="mdl-textfield__label" for="first-name">Name</label>
                            </div>
                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green"
                                for="active">
                                <input name="active" type="checkbox" id="active" class="mdl-switch__input"
                                    {{ !empty($data) && $data->active == 1 ? 'checked' : "" }}>
                                <span class="mdl-switch__label">Active</span>
                            </label>
                        </div>
                    </div>
                    <div class="file-upload">
                        <h5 style="color:black">Image</h5>
                        <div class="image-upload-wrap" style="display:{{ !empty($data) ? "none" : "block" }}">
                            <input name="image" class="file-upload-input" type='file' onchange="readURL(this);"
                                accept="image/*" />
                            <div class="drag-text">
                                <h3>Drag and drop a file or select add Image</h3>
                            </div>
                        </div>
                        <div class="file-upload-content" style="display:{{ !empty($data) ? "block" : "none" }}">
                            <img class="file-upload-image" src="{{ !empty($data) && $data->image ? Storage::url($data->image) : "" }}" alt="your image" />
                            <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">
                                    Remove
                                    <span class="image-title">Uploaded Image</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                        Back
                    </a>
                    <button style="float: right" type="submit"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();
                $('.image-title').html(input.files[0].name);
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }

        $(function() {
            $('.image-upload-wrap').bind('dragover', function () {
                    $('.image-upload-wrap').addClass('image-dropping');
                });
                $('.image-upload-wrap').bind('dragleave', function () {
                    $('.image-upload-wrap').removeClass('image-dropping');
            });
        });
</script>
@endpush