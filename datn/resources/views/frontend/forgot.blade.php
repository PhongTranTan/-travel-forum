@section('title')
Forgot
@endsection
@extends('frontend.master')
@section('content')
<section class="p-fullscreen" style="background-image:url(&quot;/images/travel.png&quot;)">
    <div class="container">
        <div class="form-content form-content-floating wow fadeIn">
            @include('frontend.include.noti')
            <form class="form form-validate" action="{{ route('post.forgot') }}" id="frmForgetPassword" method="POST">
                @csrf
                <div class="form_title">Reset your password</div>
                <p>Just enter your email address, and we will send you a link to reset your password.</p>
                <div class="form-list">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="group-btn">
                    <button class="btn-custom" type="submit">Continue</button>
                </div>
                <p class="tip signup-tip"><a href="/">Back to Home</a></p>
            </form>
        </div>
    </div>
</section>
<div class="modal fade" id="modalSuccessSent" tabindex="-1" role="dialog" aria-labelledby="modalSuccessSentLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Successful !</h5>
        </div>
        <div class="modal-body">
            <p>The reset password has sent to your mail</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
@endsection
@push('scripts')

<script>
    // $('#frmForgetPassword').on('submit',(e)=>{
    //     e.preventDefault();
    //     const $form = $(e.currentTarget);
    //     if (!$form.valid()) return;
    //     alert('a');
    //     $('#frmForgetPassword').submit();
    //     // $('#modalSuccessSent').modal('show');
    // });

    $('#frmForgetPassword').submit(function (e) {
        e.preventDefault();
        const $form = $(e.currentTarget);
        if (!$form.valid()) return;
        $(this).unbind('submit').submit();
    });

    @if(session()->has("success"))
        $('#modalSuccessSent').modal('show');
    @endif

    $('#modalSuccessSent').on('hidden.bs.modal', ()=>{
        window.location.href='/'
    });
</script>
@endpush
