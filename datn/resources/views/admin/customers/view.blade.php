@section('title')
Categories
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
                            <th class="mdl-data-table__cell--non-numeric">#</th>
                            <th class="mdl-data-table__cell--non-numeric">Book title</th>
                            <th class="mdl-data-table__cell--non-numeric">Author</th>
                            <th class="mdl-data-table__cell--non-numeric">First published</th>
                            <th class="mdl-data-table__cell--non-numeric">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">23</td>
                            <td class="mdl-data-table__cell--non-numeric">Gone with the Wind</td>
                            <td class="mdl-data-table__cell--non-numeric">Margaret Mitchell</td>
                            <td class="mdl-data-table__cell--non-numeric">1936</td>
                            <td class="mdl-data-table__cell--non-numeric"><span
                                    class="label label--mini background-color--secondary">Unread</span> </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">24</td>
                            <td class="mdl-data-table__cell--non-numeric">The Count of Monte Cristo</td>
                            <td class="mdl-data-table__cell--non-numeric">Alexandre Dumas</td>
                            <td class="mdl-data-table__cell--non-numeric">1845</td>
                            <td class="mdl-data-table__cell--non-numeric"><span
                                    class="label label--mini background-color--secondary">Unread</span> </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">25</td>
                            <td class="mdl-data-table__cell--non-numeric">Lolita</td>
                            <td class="mdl-data-table__cell--non-numeric">Vladimir Nabokov</td>
                            <td class="mdl-data-table__cell--non-numeric">1955</td>
                            <td class="mdl-data-table__cell--non-numeric"><span
                                    class="label label--mini background-color--primary">Read</span> </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">26</td>
                            <td class="mdl-data-table__cell--non-numeric">The Hobbit</td>
                            <td class="mdl-data-table__cell--non-numeric">J.R.R. Tolkien</td>
                            <td class="mdl-data-table__cell--non-numeric">1937</td>
                            <td class="mdl-data-table__cell--non-numeric"><span
                                    class="label label--mini background-color--secondary">Unread</span> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection