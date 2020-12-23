<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <div class="avatar-dropdown" id="icon">
            <span>Luke</span>
            <img src="{{ url('assets/admin/images/Icon_header.png') }}">
        </div>
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <span class="material-icons mdl-list__item-avatar"></span>
                    <span>Luke</span>
                    <span class="mdl-list__item-sub-title">Luke@skywalker.com</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">settings</i>
                    Settings
                </span>
            </li>
            <a href="login.html">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Log out
                    </span>
                </li>
            </a>
        </ul>
    </div>
</header>