@section('title')
Profile
@endsection
@extends('frontend.master')
@section('content')
<section class="p-profile">
    <div class="container">
        <div class="text-center">
            <h1>PROFILE MANAGEMENT</h1>
        </div>
        @include('frontend.include.noti')
        <!-- update personal -->
        <form action="{{ route('put.profile', ['id' => $profile->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="avatar-upload">
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ getAvatar($profile) }})">
                                            </div>
                                            <i class="icon icon-cancel"></i>
                                        </div>
                                        <div class="avatar-edit">
                                            <input id="imageUpload" type="file" name="avatar"
                                                accept=".png, .jpg, .jpeg">
                                            <label for="imageUpload"> </label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h4>{{ $profile->full_name ?? 'You have not updated' }}</h4>
                                        <p class="text-secondary mb-1">
                                            {{ $profile->job ?? 'You have not updated' }}
                                        </p>
                                        <p class="text-muted font-size-sm">
                                            {{ $profile->job_address ?? 'You have not updated' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="text" name="full_name"
                                            value="{{ $profile->full_name ?? '' }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="email" name="email"
                                            value="{{ $profile->email ?? '' }}" readonly>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="text" name="phone"
                                            value="{{ $profile->phone ?? '' }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="text" name="address"
                                            value="{{ $profile->address ?? '' }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Job</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="text" name="job"
                                            value="{{ $profile->job ?? '' }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Job Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="text" name="job_address"
                                            value="{{ $profile->job_address ?? '' }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end update personal -->

        <!-- update security -->
        <form action="{{ route('put.profile', ['id' => $profile->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password Current</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="password" name="password_old" value="" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">New Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="password" name="new_password" value="" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Confirm Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input class="form-control" type="password" name="confirm_password" value="" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end update security -->
    </div>
</section>
@endsection