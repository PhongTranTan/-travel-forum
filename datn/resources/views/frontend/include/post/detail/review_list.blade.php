<div class="booking-checkbox_wrap mt-4">
    <h5>{{ $data->count_reviews }} Reviews</h5>
    <hr>
    @if($data->reviews)
    @foreach ($data->reviews as $item)
    <div class="customer-review_wrap">
        <div class="customer-img">
            <div class="img-bg" style="background-image: url({{ getAvatar($item->customer) ?? '/images/avatar.png'}})">
                <img src="{{ getAvatar($item->customer) ?? '/images/avatar.png' }}" alt="" loading="lazy">
            </div>
            <p>{{ $item->customer->full_name }}</p>
        </div>
        <div class="customer-content-wrap">
            <div class="customer-content">
                <div class="customer-review">
                    <h6>{{ $item->title }}</h6>
                    <div class="estimate">
                        <div class="estimate-star">
                            <div class="rating">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:{{ $item->rating * 10 }}%"></div>
                            </div>
                        </div>
                        <div class="estimate-item">
                            <p>Reviewed 2 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="customer-rating">{{ (double) $item->rating }}</div>
            </div>
            <div class="customer-text">
                <p>
                    {{ $item->content }}
                </p>
            </div>
        </div>
    </div>
    <hr>
    @endforeach
    @else
    <h5>{{ $data->count_reviews }} Reviews</h5>
    @endif
    <div id="template-groups-append"></div>
</div>
