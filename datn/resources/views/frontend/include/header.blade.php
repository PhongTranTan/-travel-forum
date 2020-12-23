<header class="nav-menu headerPage">
    <div class="container-fluid fixed">
        <div class="navbar navbar-expand-lg navbar-light"><a class="navbar-brand" href="/"><img src="images/logo.png" alt="vtour"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation"><span class="icon_menu-square_alt2 text-light" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse justify-content-end collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.about') }}">About</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#modalLogin" data-toggle="modal">Login</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="imgAva">
                                <img src="/images/man.svg" alt="ava">
                            </div>
                            Account
                            <span class="arrow_carrot-down text-light" aria-hidden="true"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('page.profile') }}">Profile</a>
                            <a class="dropdown-item" href="/">Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>