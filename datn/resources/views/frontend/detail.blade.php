@section('title')
{{ $data->name ?? "Detail" }}
@endsection
@extends('frontend.master')
@section('content')
@include('frontend.include.post.detail.gallery')
<div class="p-detail">
    <section class="p-detail_evaluate">
        <div class="container">
            <div class="row">
                <div class="p-detail_evaluate-side col-lg-7 col-md-7">
                    <h5>{{ $data->name ?? "" }}</h5><br>
                    <p>{{ $data->title ?? "" }}</p>
                </div>
                <div class="p-detail_evaluate-side col-lg-5 col-md-5">
                    <div class="p-detail_evaluate_action">
                        <div class="p-detail_evaluate_action-rating"><span>9.5</span></div>
                        <div class="review-btn">
                            <a class="btn btn-outline-danger" href="#modalReviewHandle" data-toggle="modal">
                                WRITE A REVIEW
                            </a>
                            <span>34 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-detail_review">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            {!! $data->description ?? "" !!}
                        </div>
                    </div>
                    <!-- reviews -->
                    @include('frontend.include.post.detail.review_list')
                    <!-- end reviews -->
                </div>
                <!-- map -->
                @include('frontend.include.post.detail.map')
                <!-- end map -->
            </div>
        </div>
    </section>
    @include('frontend.script.script_detail')
</div>
@include('frontend.modal.review')
@endsection
@push('scripts')
<script>
    (function($){
        function rangeSlider(){
            $("#rangeRating").ionRangeSlider({
                grid: true,
                min: 0,
                skin: "big",
                max: 10,
                from: 5,
                to: 10,
                step: 0.5,
                onChange: function (data) {
                    // fired on every range slider update
                },
                onFinish: function (data) {
                    // fired on pointer release
                },
            });
        }
        function appendReviewTemplate(){
            $('#frmReview').on('submit', (e)=>{
                e.preventDefault();
                if(!$('#frmReview').valid()) return;
                $('#modalReviewHandle').modal('hide');
    
                //append template review 
                const $template = $('#template-groups-html');
                const $html = $($template.html());
                const $target = $('#template-groups-append');
                
                //get content inputs
                const content = $('#frmReview textarea.form-control').val();
                const title = $('#frmReview input[type="text"].form-control').val();
                //apply data input 
                $target.append($html);
                $html.find('.customer-content h6').text(title);
                $html.find('.customer-text p').text(content);
             });
        }
        $(function(){
            rangeSlider();
            appendReviewTemplate();
        })
    })(jQuery);
</script>
@endPush