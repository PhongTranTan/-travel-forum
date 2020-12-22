<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Searching</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keyword" content="">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:type" content="website">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta property="twitter:image" content="">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="fb:app_id" content="">
        <meta name="twitter:site" content="">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icons/favicon-16x16.png">
        <link rel="shortcut icon" href="/assets/images/icons/favicon.ico">
        <link rel="manifest" href="/assets/manifest.json">
        <meta name="msapplication-TileColor" content="#f05b28">
        <meta name="msapplication-TileImage" content="/assets/images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#f05b28">
        <link href="/assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <header class="nav-menu headerPage">
            <div class="container-fluid fixed">
                <div class="navbar navbar-expand-lg navbar-light"><a class="navbar-brand" href="/"><img src="images/logo.png" alt="vtour"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation"><span class="icon_menu-square_alt2 text-light" aria-hidden="true"></span>
                    </button>
                    <div class="navbar-collapse justify-content-end collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/about.html">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#modalLogin" data-toggle="modal">Login</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="imgAva">
                                        <img src="/images/man.svg" alt="ava">
                                    </div>
                                    Account
                                    <span class="arrow_carrot-down text-light" aria-hidden="true"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('page.profile') }}">Profile</a>
                                    <a class="dropdown-item" href="/">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main class="wrapper">
            <section class="s-section_featured p-searchResult">
                <div class="container">
                    <div class="titleSection">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="titleSection_heading wow zoomIn">
                                    <h3>Search Result
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="margin-bottom:50px">
                        <h4>Có 6 kết quả</h4>
                    </div>
                    <div class="featuredPanel wow fadeInUp">
                        <div class="featuredPanel_wrapper">
                            <div class="featuredPanel_item">
                                <div class="featuredPanel_item_wrap">
                                    <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature1.jpg)" title="thumbnail"><img src="/images/feature1.jpg" alt="thumbnail" loading="lazy"></a>
                                    </div>
                                    <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                        <p>Restaurant • 3 Reviews • $$$$$</p>
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
                                <div class="featuredPanel_item_wrap">
                                    <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature2.jpg)" title="thumbnail"><img src="/images/feature2.jpg" alt="thumbnail" loading="lazy"></a>
                                    </div>
                                    <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                        <p>Restaurant • 3 Reviews • $$$$$</p>
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
                                <div class="featuredPanel_item_wrap">
                                    <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature3.jpg)" title="thumbnail"><img src="/images/feature3.jpg" alt="thumbnail" loading="lazy"></a>
                                    </div>
                                    <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                        <p>Restaurant • 3 Reviews • $$$$$</p>
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
                                <div class="featuredPanel_item_wrap">
                                    <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature4.jpg)" title="thumbnail"><img src="/images/feature4.jpg" alt="thumbnail" loading="lazy"></a>
                                    </div>
                                    <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                        <p>Restaurant • 3 Reviews • $$$$$</p>
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
                                <div class="featuredPanel_item_wrap">
                                    <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature5.jpg)" title="thumbnail"><img src="/images/feature5.jpg" alt="thumbnail" loading="lazy"></a>
                                    </div>
                                    <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                        <p>Restaurant • 3 Reviews • $$$$$</p>
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
                                <div class="featuredPanel_item_wrap">
                                    <div class="featuredPanel_item_img"><a class="img-bg" href="/detail.html" style="background-image: url(/images/feature6.jpg)" title="thumbnail"><img src="/images/feature6.jpg" alt="thumbnail" loading="lazy"></a>
                                    </div>
                                    <div class="featuredPanel_item_content"><a class="featuredPanel_item-link" href="/detail.html">Burger &amp; Lobster</a>
                                        <p>Restaurant • 3 Reviews • $$$$$</p>
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
        </main>
        <!-- End Main Content-->

        <footer class="dark-bg footer">
            <div class="container">
                <div class="text-center">
                    <div class="imgLogo"><img src="/images/logo.png" alt="logo"></div>
                </div>
                <div class="copyright">
                    <p>Copyright © 2018 Listing. All rights reserved | This template is made with </p>
                </div>
            </div>
        </footer>
        <script src="/assets/js/library.js"></script>
        <script async src="/assets/js/pages.js"></script>
    </body>
</html>