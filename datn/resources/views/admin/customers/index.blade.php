@section('title')
Customers
@endsection
@extends('admin.master')
@section('content')
<div class="mdl-grid ui-tables">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Customers</h1>
            </div>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table bordered-table">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric" style="width:30px">No.</th>
                            <th class="mdl-data-table__cell--non-numeric">Full Name</th>
                            <th class="mdl-data-table__cell--non-numeric">Phone</th>
                            <th class="mdl-data-table__cell--non-numeric">Email</th>
                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                            <th class="mdl-data-table__cell--non-numeric">Job</th>
                            <th class="mdl-data-table__cell--non-numeric">Active</th>
                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($customers) && $customers->count() > 0)
                        @foreach($customers as $key => $item)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $key + 1 }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->name }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->image }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->active }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->active }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->active }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->active }}</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--secondary">Delete</span>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8" class="mdl-data-table__cell--non-numeric" style="text-align: center">
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