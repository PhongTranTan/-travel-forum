@section('title')
Danh sách tìm kiếm
@endsection
@extends('frontend.master')
@section('content')
<section class="s-section_featured p-searchResult">
    <div class="container">
        <div class="titleSection">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="titleSection_heading wow zoomIn">
                        <h3>Search Result</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-bottom:50px">
            <h4>Có {{ $posts->total() }} kết quả</h4>
        </div>
        @if($posts)
        <div class="featuredPanel wow fadeInUp">
            <div class="featuredPanel_wrapper show-more-add">
                @foreach ($posts as $key => $item)
                @include('frontend.include.post.item')
                @endforeach
            </div>
        </div>
        @if($posts->total() > 9 )
        <div class="featuredPanel_viewMore wow zoomIn">
            <a class="btn-custom show-more-list" 
                href="javascript:void(0)"
                data-url-next="{{ $posts->nextPageUrl() }}"
            >
                Show more
            </a>
        </div>
        @endif
        @endif
    </div>
</section>
@endsection
@push('scripts')
<script>
    $( function() {
        $('body').on('click', '.show-more-list', function(e) {
            e.preventDefault();
            let url = $(this).attr('data-url-next');
            $.ajax({
                method: "GET",
                url: url,
                success: function ($rp) {
                    $('.show-more-add').append($rp.data);
                    if ($rp.next === 0) {
                        $('.show-more-list').css('display', 'none');
                    } else {
                        $('.show-more-list').attr('data-url-next', $rp.next);
                    }
                },
                error: function () {
                    alert('Get data fail!');
                }
            });
        });
    });
</script>
@endPush