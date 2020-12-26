@if($posts)
@foreach ($posts as $key => $item)
@include('frontend.include.post.item')
@endforeach
@endif