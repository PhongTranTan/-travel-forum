<div class="gallery-banner">
    <div class="gallery-section swiper-container" id="aniimated">
        <div class="grid-gallery swiper-wrapper">
            <div class="grid-sizer"></div>
            @foreach ($images as $key => $image)
            <div class="grid-item {{ $key != 0 ? 'size-horizontal' : 'size-vertical' }} swiper-slide">
                <a class="img-bg galleryItem" href="{{ $image }}" 
                        data-fancybox="images1" 
                        data-caption="This image has a simple caption {{ $key + 1 }}" 
                    style="background-image:url('{{ $image }}')">
                    <img src="{{ $image }}" alt="Image not found">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>