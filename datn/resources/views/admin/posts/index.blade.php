@section('title')
Posts
@endsection
@extends('admin.master')
@section('content')
<div class="mdl-cell mdl-cell--12-col-desktop">
    <a href="{{ route('admin.post.create') }}"
        class="button--colored-teal mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">
        <i _ngcontent-serverapp-c93="" class="material-icons">create</i>
        Create <span class="mdl-button__ripple-container">
            <span class="mdl-ripple is-animating"
                style="width: 262.161px; height: 262.161px; transform: translate(-50%, -50%) translate(36px, 21px);">
            </span></span>
    </a>
</div>
<div class="mdl-grid ui-tables">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.include.noti')
                </div>
            </div>
            <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Posts</h1>
            </div>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table bordered-table">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric" style="width:30px">No.</th>
                            <th class="mdl-data-table__cell--non-numeric">Category</th>
                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                            <th class="mdl-data-table__cell--non-numeric">Phone</th>
                            <th class="mdl-data-table__cell--non-numeric">Website</th>
                            <th class="mdl-data-table__cell--non-numeric">View</th>
                            <th class="mdl-data-table__cell--non-numeric">ReView</th>
                            <th class="mdl-data-table__cell--non-numeric">Active</th>
                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($posts) && $posts->count() > 0)
                        @foreach($posts as $key => $item)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $key + 1 }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->category->name }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->name }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->address }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->phone }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->website }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->view }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->view }}</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                @if($item->active == 1)
                                <span class="label label--mini color--green">Active</span>
                                @else
                                <span class="label label--mini background-color--secondary">Inactive</span>
                                @endif
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a  href="{{ route('admin.post.delete', ['id' => $item->id]) }}"
                                    class="delete-item mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                    Delete
                                </a>
                                <a href="{{ route('admin.post.edit', ['id' => $item->id ]) }}"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-orange">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="9" class="mdl-data-table__cell--non-numeric" style="text-align: center">
                                No data
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@include('admin.include.modal.delete')
@endsection
@push('scripts')
    <script>
        $( function() { 
            $('.delete-item').on('click', function (e) {
                e.preventDefault();
                let urlDelete = $(this).attr('href');
                $('#form-delete').attr('action', urlDelete);
                $('#modalDelete').modal('show');
            });
        });
    </script>
@endpush