@extends('frontend.master')
@section('content')
    <section class="s-bannerHome d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="s-bannerHome-title_box">
                    <div class="s-bannerHome-content_wrap">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5">Discover great places in Viet Nam</h2>
                        <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5">Let's uncover the best places to eat, drink, and shop nearest to you.</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form class="form-wrap mt-4" action="/search-result.html">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <input class="wow fadeInLeft form-control" type="text" placeholder="What are your looking for?" data-wow-duration="1s" data-wow-delay="0.7">
                        <button class="wow fadeInRight btn-form" type="submit" data-wow-duration="1s" data-wow-delay="0.7"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
                <div class="gridGallery_item wow gridGallery_item-vertical fadeInLeft">
                    <figure class="effect-ruby"><img src="/images/find1.jpg" alt="gallery" loading="lazy">
                        <figcaption>
                            <h5>Nightlife
                            </h5>
                            <p>385 listings
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="gridGallery_item wow gridGallery_item-topBig fadeInDown">
                    <figure class="effect-ruby"><img src="/images/find2.jpg" alt="gallery" loading="lazy">
                        <figcaption>
                            <h5>Restaurant
                            </h5>
                            <p>210 listings
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="gridGallery_item wow gridGallery_item-topSmall fadeInRight">
                    <figure class="effect-ruby"><img src="/images/find4.jpg" alt="gallery" loading="lazy">
                        <figcaption>
                            <h5>Hotel
                            </h5>
                            <p>577 listings
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="gridGallery_item wow gridGallery_item-botBig fadeInUp">
                    <figure class="effect-ruby"><img src="/images/find5.jpg" alt="gallery" loading="lazy">
                        <figcaption>
                            <h5>Art&amp;Culture
                            </h5>
                            <p>79 listings
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="gridGallery_item wow gridGallery_item-botSmall fadeInUp">
                    <figure class="effect-ruby"><img src="/images/find3.jpg" alt="gallery" loading="lazy">
                        <figcaption>
                            <h5>Outdoors
                            </h5>
                            <p>114 listings
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
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
                    <div class="featuredPanel_item">
                        <div class="featuredPanel_rating">7.5
                        </div>
                        <div class="featuredPanel_item_wrap">
                            <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature1.jpg)" title="thumbnail"><img src="/images/feature1.jpg" alt="thumbnail" loading="lazy"></a>
                            </div>
                            <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                <p> <span>Restaurant </span><span>• 3 Reviews </span><span>• $$$$$</span></p>
                                <ul>
                                    <li><i class="icon ic-marker"></i><span>1301 Avenue, Brooklyn, NY 11230</span></li>
                                    <li> <i class="icon ic-smartphone"></i><span>+44 20 7336 8898</span></li>
                                    <li> <i class="icon ic-link"></i><span>https://burgerandlobster.com</span></li>
                                </ul>
                                <div class="bottom-icons close">
                                    <p>Close Now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featuredPanel_item">
                        <div class="featuredPanel_rating">8.5
                        </div>
                        <div class="featuredPanel_item_wrap">
                            <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature2.jpg)" title="thumbnail"><img src="/images/feature2.jpg" alt="thumbnail" loading="lazy"></a>
                            </div>
                            <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                <p> <span>Restaurant </span><span>• 3 Reviews </span><span>• $$$$$</span></p>
                                <ul>
                                    <li><i class="icon ic-marker"></i><span>1301 Avenue, Brooklyn, NY 11230</span></li>
                                    <li> <i class="icon ic-smartphone"></i><span>+44 20 7336 8898</span></li>
                                    <li> <i class="icon ic-link"></i><span>https://burgerandlobster.com</span></li>
                                </ul>
                                <div class="bottom-icons close">
                                    <p>Close Now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featuredPanel_item">
                        <div class="featuredPanel_rating">9.0
                        </div>
                        <div class="featuredPanel_item_wrap">
                            <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature3.jpg)" title="thumbnail"><img src="/images/feature3.jpg" alt="thumbnail" loading="lazy"></a>
                            </div>
                            <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                <p> <span>Restaurant </span><span>• 3 Reviews </span><span>• $$$$$</span></p>
                                <ul>
                                    <li><i class="icon ic-marker"></i><span>1301 Avenue, Brooklyn, NY 11230</span></li>
                                    <li> <i class="icon ic-smartphone"></i><span>+44 20 7336 8898</span></li>
                                    <li> <i class="icon ic-link"></i><span>https://burgerandlobster.com</span></li>
                                </ul>
                                <div class="bottom-icons open">
                                    <p>Open Now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featuredPanel_item">
                        <div class="featuredPanel_rating">7.0
                        </div>
                        <div class="featuredPanel_item_wrap">
                            <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature4.jpg)" title="thumbnail"><img src="/images/feature4.jpg" alt="thumbnail" loading="lazy"></a>
                            </div>
                            <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                <p> <span>Restaurant </span><span>• 3 Reviews </span><span>• $$$$$</span></p>
                                <ul>
                                    <li><i class="icon ic-marker"></i><span>1301 Avenue, Brooklyn, NY 11230</span></li>
                                    <li> <i class="icon ic-smartphone"></i><span>+44 20 7336 8898</span></li>
                                    <li> <i class="icon ic-link"></i><span>https://burgerandlobster.com</span></li>
                                </ul>
                                <div class="bottom-icons open">
                                    <p>Open Now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featuredPanel_item">
                        <div class="featuredPanel_rating">7.5
                        </div>
                        <div class="featuredPanel_item_wrap">
                            <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature5.jpg)" title="thumbnail"><img src="/images/feature5.jpg" alt="thumbnail" loading="lazy"></a>
                            </div>
                            <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                <p> <span>Restaurant </span><span>• 3 Reviews </span><span>• $$$$$</span></p>
                                <ul>
                                    <li><i class="icon ic-marker"></i><span>1301 Avenue, Brooklyn, NY 11230</span></li>
                                    <li> <i class="icon ic-smartphone"></i><span>+44 20 7336 8898</span></li>
                                    <li> <i class="icon ic-link"></i><span>https://burgerandlobster.com</span></li>
                                </ul>
                                <div class="bottom-icons close">
                                    <p>Close Now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featuredPanel_item">
                        <div class="featuredPanel_rating">7.5
                        </div>
                        <div class="featuredPanel_item_wrap">
                            <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature6.jpg)" title="thumbnail"><img src="/images/feature6.jpg" alt="thumbnail" loading="lazy"></a>
                            </div>
                            <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                <p> <span>Restaurant </span><span>• 3 Reviews </span><span>• $$$$$</span></p>
                                <ul>
                                    <li><i class="icon ic-marker"></i><span>1301 Avenue, Brooklyn, NY 11230</span></li>
                                    <li> <i class="icon ic-smartphone"></i><span>+44 20 7336 8898</span></li>
                                    <li> <i class="icon ic-link"></i><span>https://burgerandlobster.com</span></li>
                                </ul>
                                <div class="bottom-icons close">
                                    <p>Close Now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuredPanel_viewMore wow zoomIn"><a class="btn-custom" href="#">Xem thêm</a></div>
        </div>
    </section>
    <section class="s-section_category">
        <div class="container">
            <div class="titleSection">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="titleSection_heading wow zoomIn">
                            <h3>Browse Categories
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categoryPanel">
                <div class="categoryPanel_wrapper row">
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-automotive"></i>
                                <h6>Automotive
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-beauty"></i>
                                <h6>Beauty &amp; Spa
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-hotel"></i>
                                <h6>Hotel
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-restaurant"></i>
                                <h6>Restaurant
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-shopping"></i>
                                <h6>Shopping
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-cup"></i>
                                <h6>Coffee
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-beer"></i>
                                <h6>Club &amp; Bar
                                </h6>
                            </div></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6"><a class="categoryPanel_item wow zoomIn" href="#">
                            <div class="categoryPanel_item-icon"><i class="icon ic-destination"></i>
                                <h6>Destination
                                </h6>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection