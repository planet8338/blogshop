<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="img/logo.png" width="30" height="30" alt="" loading="lazy">
        <a class="navbar-brand" href="/">IT-Sklep</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Strona Główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sklep">Sklep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontakt">Kontakt</a>
                </li>
            </ul>

            <!-- Koszyk -->
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto col-md-4">
                <li class="nav-item dropdown order-2 order-md-2">
                    <a href="/koszyk" class="nav-link" title="Shopping">
                        <i class="fas fa-shopping-bag" style="font-size:20px;"></i>
                    </a>
                </li>

                <!-- Search -->
                <form class="d-flex input-group w-auto">
                    <input
                        type="search"
                        class="form-control"
                        placeholder="Czego szukasz?"
                        aria-label="Search"/>
                    <button type="button" class="btn btn-primary btn-sm">szukaj</button>
                </form>

                <!-- Logowanie form -->
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Zaloguj <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email/Użytkownik" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Hasło" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Zapomniałeś hasła?</a></small>
                                </div>
                                <div class="form-group text-center">
                                    <small>lub</small>
                                </div>

                            </form>
                            <div class="form-group text-center">
                                <a href="/rejestracja" class="btn btn-danger justify-content-center">Zarejestruj się</a>

                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
