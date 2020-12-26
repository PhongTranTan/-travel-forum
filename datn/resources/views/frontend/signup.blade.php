@section('title')
Đăng ký
@endsection
@extends('frontend.master')
@section('content')
<section class="p-fullscreen" style="background-image:url(&quot;/images/travel.png&quot;)">
    <div class="container">
        <div class="form-content form-content-floating wow fadeIn">
            <form class="form form-validate" action="{{ route('post.signup') }}" id="frmSignUp" method="POST">
                @csrf
                <div class="form_title">Create a Listings free account</div>
                <div class="form-list">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-list">
                    <input id="password" type="password" name="password" placeholder="Password(5 - 20 characters)"
                        required>
                </div>
                <div class="form-list">
                    <input type="password" name="confirmPassword" placeholder="Confirm password" required>
                </div>
                <div class="group-btn">
                    <button class="btn-custom" type="submit">Signup</button>
                </div>
                <p class="tip signup-tip">
                    <span>Already have an account? &nbsp;</span>
                    <a href="/">Back to Home</a>
                </p>
            </form>
        </div>
    </div>
</section>
@endsection