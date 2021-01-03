<div class="col-lg-4">
    <div class="contact-info onShowDesktop">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.530887756531!2d106.66729411458839!3d10.77059136224701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edddb818ebf%3A0xfc8c05045f47a3d8!2zVHJ1bmcgVMOibSBUaMawxqFuZyBN4bqhaSBW4bqhbiBI4bqhbmg!5e0!3m2!1svi!2s!4v1607958124289!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe> --}}
        {!! $data->iframe ?? "" !!}
        <div class="featuredPanel_item">
            <div class="featuredPanel_item_content">
                <ul>
                    <li>
                        <i class="icon ic-marker"></i>
                        <span>{!! $data->address ?? "" !!}</span>
                    </li>
                    <li>
                        <i class="icon ic-smartphone"></i>
                        <a href="tel:{!! $data->phone ?? "" !!}">{!! $data->phone ?? "" !!}</a>
                    </li>
                    <li>
                        <i class="icon ic-link"></i>
                        <a href="{!! $data->website ?? "" !!}">
                            {!! $data->website ?? "" !!}
                        </a>
                    </li>
                    <li>
                        <i class="icon ic-clock"></i>
                        <span>{!! $data->time_start ?? "" !!} - {!! $data->time_end ?? "" !!} </span>
                        {{-- <div class="bottom-icons open">
                            <p>Open Now</p>
                        </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>