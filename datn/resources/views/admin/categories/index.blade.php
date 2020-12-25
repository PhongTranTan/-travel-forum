@section('title')
Categories
@endsection
@extends('admin.master')
@section('content')
<div class="mdl-cell mdl-cell--12-col-desktop">
    <a href="{{ route('admin.category.create') }}" class="button--colored-teal mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">
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
            <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Categories</h1>
            </div>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table bordered-table">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric" style="width:30px">No.</th>
                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                            <th class="mdl-data-table__cell--non-numeric">Icon</th>
                            <th class="mdl-data-table__cell--non-numeric">Active</th>
                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($categories) && $categories->count() > 0)
                        @foreach($categories as $key => $item)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $key + 1 }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->name }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->image }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->active }}</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--secondary">Delete</span>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="mdl-data-table__cell--non-numeric" style="text-align: center">
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

@endsection