<div class="mdl-layout__drawer">
    <header>Vtour</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current"
                        href="{{ route('admin.dashboard.index') }}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                            Categories
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{ route('admin.category.index') }}">
                                List Categories
                            </a>
                        </div>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">menu_book</i>
                            Posts
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="ui-buttons.html">
                                List Posts
                            </a>
                        </div>
                    </div>
                    <a class="mdl-navigation__link" href="ui-components.html">
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