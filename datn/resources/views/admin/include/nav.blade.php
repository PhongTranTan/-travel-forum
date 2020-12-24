<div class="mdl-layout__drawer">
    <header>Vtour</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link @if(request()->routeIs('admin.dashboard.index')) mdl-navigation__link--current @endif"
                        href="{{ route('admin.dashboard.index') }}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>
                    <div class="sub-navigation @if(request()->routeIs('admin.category.*')) sub-navigation--show @endif">
                        <a class="mdl-navigation__link @if(request()->routeIs('admin.category.*')) sub-navigation--show @endif">
                            <i class="material-icons">view_comfy</i>
                            Categories
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link @if(request()->routeIs('admin.category.index')) mdl-navigation__link--current @endif" 
                                href="{{ route('admin.category.index') }}">
                                List Categories
                            </a>
                        </div>
                    </div>
                    <div class="sub-navigation @if(request()->routeIs('admin.post.*')) sub-navigation--show @endif">
                        <a class="mdl-navigation__link @if(request()->routeIs('admin.post.*')) sub-navigation--show @endif">
                            <i class="material-icons">menu_book</i>
                            Posts
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link @if(request()->routeIs('admin.post.index')) mdl-navigation__link--current @endif" 
                                href="{{ route('admin.post.index') }}">
                                List Posts
                            </a>
                        </div>
                    </div>
                    <a class="mdl-navigation__link  @if(request()->routeIs('admin.customer.index')) mdl-navigation__link--current @endif" 
                        href="{{ route('admin.customer.index') }}">
                        <i class="material-icons">person</i>
                        Customer
                    </a>
                    <div class="mdl-layout-spacer"></div>
                    <hr>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>