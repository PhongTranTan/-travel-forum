@section('title')
Post
@endsection
@push('css')
<link rel="stylesheet" href="{{ url('assets/admin/css/image/image.css') }}">
@endpush
@extends('admin.master')
@section('content')

<div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.include.noti')
                </div>
            </div>
            <div class="mdl-card__title">
                <h5 class="mdl-card__title-text text-color--white">Create Post</h5>
            </div>
            <div class="mdl-card__supporting-text">
                <form class="form form--basic"
                    action="{{ !empty($data) ? route('admin.post.update', ['id' => $data->id ]) : route('admin.post.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($data))
                    @method('PUT')
                    @endif
                    <div class="mdl-grid">
                        <div
                            class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone form__article">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Categories</label>
                                        <select class="form-control" id="category_id " name="category_id" required>
                                            @foreach ($categories as $keyCate => $category)
                                            <option value="{{ $category->id }}" @if(!empty($data) && $category->id ==
                                                $data->category_id) selected @endif>
                                                {{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                            value="{{ !empty($data) ? $data->name : "" }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input class="form-control" type="text" id="title" name="title"
                                            value="{{ !empty($data) ? $data->title : "" }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input class="form-control" type="text" id="website" name="website"
                                            value="{{ !empty($data) ? $data->website : "" }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" type="text" id="phone" name="phone"
                                            value="{{ !empty($data) ? $data->phone : "" }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input class="form-control" type="text" id="address" name="address"
                                            value="{{ !empty($data) ? $data->address : "" }}">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lat">Lat</label>
                                        <input class="form-control" type="text" id="lat" name="lat"
                                            value="{{ !empty($data) ? $data->lat : "" }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lng">Lng</label>
                            <input class="form-control" type="text" id="lng" name="lng"
                                value="{{ !empty($data) ? $data->lng : "" }}">
                        </div>
                    </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30"
                            rows="10">{{ !empty($data) ? $data->description : "" }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="iframe">Iframe</label>
                        <textarea class="form-control" name="iframe" id="iframe" cols="30"
                            rows="10">{{ !empty($data) ? $data->iframe : "" }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lat">Time Start</label>
                        <input class="form-control" type="time" id="time_start" name="time_start"
                            value="{{ !empty($data) ? $data->time_start : "00:00:00" }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="time_end">Time End</label>
                        <input class="form-control" type="time" id="time_end" name="time_end"
                            value="{{ !empty($data) ? $data->time_end : "00:00:00" }}">
                    </div>
                </div>
            </div>
            <hr>
            <h5>Banners current</h5>
            <div class="row">
                @if( !empty($data) && $data->banners_admin)
                @foreach ($data->banners_admin as  $keyb => $banner)
                {{-- <figure class="figure">
                    <img width="60" height="60" src="{{ $banner }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption"></figcaption>
                </figure> --}}
                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 18rem;">
                        <img class="card-img-top" src="{{ $banner }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Banner item {{ $keyb + 1  }}</p>
                        </div>
                    </div>
                    <p></p>
                </div>
                @endforeach
                @else
                <h5>Not list banners</h5>
                @endif
            </div>
            <h5>Change list Banners</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image1">Banner Item 1</label>
                        <input name="images[]" type="file" class="form-control-file" id="image1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image2">Banner Item 2</label>
                        <input name="images[]" type="file" class="form-control-file" id="image2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image3">Banner Item 3</label>
                        <input name="images[]" type="file" class="form-control-file" id="image3">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image4">Banner Item 4</label>
                        <input name="images[]" type="file" class="form-control-file" id="image4">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image5">Banner Item 5</label>
                        <input name="images[]" type="file" class="form-control-file" id="image5">
                    </div>
                </div>
            </div>
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="active">
                <input name="active" type="checkbox" id="active" class="mdl-switch__input"
                    {{ !empty($data) && $data->active == 1 ? 'checked' : "" }}>
                <span class="mdl-switch__label">Active</span>
            </label>
        </div>
    </div><br>
    <hr>
    <div class="file-upload">
        <h5 style="color:black">Image Default</h5>
        <div class="image-upload-wrap" style="display:{{ !empty($data) && $data->image ? "none" : "block" }}">
            <input name="image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
            <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
            </div>
        </div>
        <div class="file-upload-content" style="display:{{ !empty($data) && $data->image ? "block" : "none" }}">
            <img class="file-upload-image" src="{{ !empty($data) && $data->image ? Storage::url($data->image) : "" }}"
                alt="your image" />
            <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image">
                    Remove
                    <span class="image-title">Uploaded Image</span>
                </button>
            </div>
        </div>
    </div>


    <a href="{{ route('admin.post.index') }}"
        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
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
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
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

        CKEDITOR.replace('description');
    });
</script>
@endpush
