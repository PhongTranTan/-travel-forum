<div class="featuredPanel_item">
    <div class="featuredPanel_rating">7.5</div>
    <div class="featuredPanel_item_wrap">
        <div class="featuredPanel_item_img">
            <a class="img-bg" 
                href="{{ route('page.detail', ['id' => $item->id]) }}" 
                style="background-image: url({{ $item->image ? Storage::url($item->image) : "/images/feature1.jpg" }})"
                title="thumbnail">
                <img src="{{ $item->image ? Storage::url($item->image) : "/images/feature1.jpg" }}" alt="thumbnail" loading="lazy">
            </a>
        </div>
        <div class="featuredPanel_item_content">
            <a class="featuredPanel_item-link" href="{{ route('page.detail', ['id' => $item->id]) }}">
                {{ $item->name ?? "" }}
            </a>
            <p>
                <span>{{ $item->category->name ?? "" }}</span>
                <span>• 3 Reviews</span>
                <span>• {{ $item->view ?? 0 }}</span>
            </p>
            <ul>
                <li>
                    <i class="icon ic-marker"></i>
                    <span>{{ $item->address ?? "" }}</span></li>
                <li>
                    <i class="icon ic-smartphone"></i>
                    <span>{{ $item->phone ?? "" }}</span></li>
                <li>
                    <i class="icon ic-link"></i>
                    <span>{{ $item->website ?? "" }}</span></li>
            </ul>
            <div class="bottom-icons close">
                <p>Close Now</p>
            </div>
        </div>
    </div>
</div>