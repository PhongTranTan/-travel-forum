@section('title')
Du lịch
@endsection
@extends('frontend.master')
@section('content')
<!-- search -->
<section class="s-bannerHome d-flex align-items-center">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="s-bannerHome-title_box">
                <div class="s-bannerHome-content_wrap">
                    <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5">Discover great places in Viet
                        Nam</h2>
                    <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5">Let's uncover the best places
                        to eat, drink, and shop nearest to you.</h5>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <form class="form-wrap mt-4" action="{{ route('page.search') }}">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <input class="wow fadeInLeft form-control" type="text" placeholder="What are your looking for?"
                        name="key_word" data-wow-duration="1s" data-wow-delay="0.7" />
                    <button class="wow fadeInRight btn-form" type="submit" data-wow-duration="1s" data-wow-delay="0.7">
                        <span class="icon-magnifier search-icon"></span>
                        SEARCH
                        <i class="pe-7s-angle-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- end search -->

<!-- show listing by categories -->
<section class="s-section_main">
    <div class="container">
        <div class="titleSection">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="titleSection_heading wow zoomIn">
                        <h3>What do you need to find?
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="gridGallery">
            <div class="gridGallery-sizer"></div>
            @if($categoriesLimit)
            @foreach ($categoriesLimit->slice(0,5) as $keyCategory => $category)
            <a href="{{ route('page.search', ['category' => $category->id ]) }}">
                <div class="gridGallery_item wow  {{ getClassCategories($keyCategory) }}">
                    <figure class="effect-ruby">
                        <img src="{{ getImageCategory($category) }}" alt="gallery" loading="lazy">
                        <figcaption>
                            <h5>{{ $category->name }}</h5>
                            <p>{{ $category->count_post }} listings</p>
                        </figcaption>
                    </figure>
                </div>
            </a>
            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- end show listing by categories -->

<!-- featured places -->
@if($posts)
<section class="s-section_featured">
    <div class="container">
        <div class="titleSection">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="titleSection_heading wow zoomIn">
                        <h3>Featured Places
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="featuredPanel wow fadeInUp">
            <div class="featuredPanel_wrapper">
                @foreach ($posts as $key => $item)
                @include('frontend.include.post.item')
                @endforeach
            </div>
        </div>
        <div class="featuredPanel_viewMore wow zoomIn">
            <a class="btn-custom" href="{{ route('page.search') }}">Xem thêm</a>
        </div>
    </div>
</section>
@endif
<!-- end featured places -->

<!-- categories -->
<section class="s-section_category">
    <div class="container">
        <div class="titleSection">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="titleSection_heading wow zoomIn">
                        <h3>Browse Categories</h3>
                    </div>
                </div>
            </div>
        </div>
        @if($categories)
        <div class="categoryPanel">
            <div class="categoryPanel_wrapper row">
                @foreach ($categories as $keyCategory => $category)
                <div class="col-lg-3 col-md-4 col-6">
                    <a class="categoryPanel_item wow zoomIn"
                        href="{{ route('page.search', ['category' => $category->id ]) }}">
                        <div class="categoryPanel_item-icon">
                            {!! $category->icon ? $category->icon_element[$category->icon] : '<i
                                class="icon ic-automotive"></i>' !!}
                            <h6>{{ $category->name }}</h6>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
<!-- end categories -->
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
