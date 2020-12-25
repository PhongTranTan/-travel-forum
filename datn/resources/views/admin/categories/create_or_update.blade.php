@section('title')
Categories
@endsection
@extends('admin.master')
@section('content')
    <div class="mdl-grid ui-tables">
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">Categories</h1>
                </div>
                <div class="mdl-card__supporting-text no-padding">
                    @if(isset($categories) && $categories->count() > 0)
                        <table class="mdl-data-table mdl-js-data-table bordered-table">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">No.</th>
                                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                                    <th class="mdl-data-table__cell--non-numeric">Image</th>
                                    <th class="mdl-data-table__cell--non-numeric">Active</th>
                                    <th class="mdl-data-table__cell--non-numeric">Action</th>
                                </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    @else 
                        <h5 style="text-align: center">No data</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection