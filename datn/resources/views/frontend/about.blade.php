@section('title')
Về chúng tôi
@endsection
@extends('frontend.master')
@section('content')
    <div class="p-about">
        <div class="container">
            <div class="row tm-welcome-row">
                <div class="col-12 tm-page-cols-container">
                    <div class="tm-page-col-left tm-welcome-box tm-bg-gradient wow fadeInLeft">
                        <p class="tm-welcome-text"><em>
                                "This is a gradient CSS background #A0c0c0 to #669999 and right
                                side is a pink lady parallx image."</em></p>
                    </div>
                    <div class="tm-page-col-right wow fadeInRight">
                        <div class="tm-welcome-parallax" data-parallax="scroll" data-image-src="/images/squad.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="p-about_content">
                <h2 class="wow zoomIn">About Us</h2>
                <p class="wow fadeIn">
                    Above pink girl photo is provided by Moose Photos from
                    Pexels. This is a tab content area. There are 3 tabs at the
                    left side. Curabitur porttitor metus nisl. Nullam nec dictum
                    dolor. Sed ultricies purus nec suscipit vulputate. Fusce a
                    massa eu orci vulputate varius. Quisque quis ullamcorper
                    sapien. Integer eu luctus nulla, vel viverra odio.
                </p>
                <p class="wow fadeIn">
                    Above pink girl photo is provided by Moose Photos from
                    Pexels. This is a tab content area. There are 3 tabs at the
                    left side. Curabitur porttitor metus nisl. Nullam nec dictum
                    dolor. Sed ultricies purus nec suscipit vulputate. Fusce a
                    massa eu orci vulputate varius. Quisque quis ullamcorper
                    sapien. Integer eu luctus nulla, vel viverra odio.
                </p>
                <div class="p-about_panel wow fadeInUp">
                    <div class="p-about_panel-info">
                        <div class="p-about_panel-img">
                            <div class="img-bg" style="background-image: url(/images/man.jpg)"><img src="/images/man.jpg" alt="people" loading="lazy">
                            </div>
                            <h4>New Hudson
                            </h4>
                            <p>Project Manage
                            </p>
                        </div>
                    </div>
                    <div class="p-about_panel-info">
                        <div class="p-about_panel-img">
                            <div class="img-bg" style="background-image: url(/images/man.jpg)"><img src="/images/man.jpg" alt="people" loading="lazy">
                            </div>
                            <h4>New Hudson
                            </h4>
                            <p>Project Manage
                            </p>
                        </div>
                    </div>
                    <div class="p-about_panel-info">
                        <div class="p-about_panel-img">
                            <div class="img-bg" style="background-image: url(/images/man.jpg)"><img src="/images/man.jpg" alt="people" loading="lazy">
                            </div>
                            <h4>New Hudson
                            </h4>
                            <p>Project Manage
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        (function($){
            $(function() {
                $('.tm-welcome-parallax').parallax();
            })
        })(jQuery);
    </script>
@endpush
