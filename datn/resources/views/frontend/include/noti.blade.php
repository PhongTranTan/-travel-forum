@if(session()->has("success"))
    <div class="alert alert-success alert-dismissible fade in" style="opacity:unset">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session("success") }}
    </div>
@endif

@if(session()->has("error"))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {{ session("error") }}
    </div>
@endif