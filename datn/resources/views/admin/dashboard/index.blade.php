@section('title')
Dashboard
@endsection
@extends('admin.master')
@section('content')
<div class="mdl-grid mdl-grid--no-spacing dashboard">
    <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
        <!-- trending widget-->
        <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--2-col-phone">
            <div class="mdl-card mdl-shadow--2dp trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Total</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="mdl-list">
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content list__item-text">Categories</span>
                            <span class="mdl-list__item-secondary-content">
                                <i class="material-icons trending__arrow-up" role="presentation">
                                    &#xE5C7
                                </i>
                            </span>
                            <span class="mdl-list__item-secondary-content trending__percent">1</span>
                        </li>
                        <li class="mdl-list__item list__item--border-top">
                            <span class="mdl-list__item-primary-content list__item-text">Post</span>
                            <span class="mdl-list__item-secondary-content">
                                <i class="material-icons trending__arrow-up" role="presentation">
                                    &#xE5C7
                                </i>
                            </span>
                            <span class="mdl-list__item-secondary-content trending__percent">2</span>
                        </li>
                        <li class="mdl-list__item list__item--border-top">
                            <span class="mdl-list__item-primary-content list__item-text">Account</span>
                            <span class="mdl-list__item-secondary-content">
                                <i class="material-icons trending__arrow-up" role="presentation">
                                    &#xE5C7
                                </i>
                            </span>
                            <span class="mdl-list__item-secondary-content trending__percent">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end trending widget-->
    </div>
</div>
@endsection