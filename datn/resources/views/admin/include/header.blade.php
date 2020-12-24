<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <div class="avatar-dropdown" id="icon">
            <span>Admin</span>
            <img src="{{ url('/assets/images/icons/favicon.ico') }}">
        </div>
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <span class="material-icons mdl-list__item-avatar" 
                        style="background-image: url('{{ url('/assets/images/icons/favicon.ico') }}') !important"
                    >
                </span>
                    <span>Admin</span>
                    <span class="mdl-list__item-sub-title">admin@vtour.com</span>
                </span>
            </li>
            <a href="#">
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