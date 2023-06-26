<nav class="navbar is-white is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="https://icons.veryicon.com/png/o/miscellaneous/standard/task-32.png" width="56" height="56">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarTask">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarTask" class="navbar-menu">
        @auth
            <div class="navbar-start">
                <a class="navbar-item" href="/admin/tasks/create">Nieuwe taak</a>
            </div>
        @endauth

        <div class="navbar-end">
            @auth
                <div class="navbar-item">
                    <a href="/logout" class="button is-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Uitloggen
                    </a>
                    <form id="logout-form" method="POST" action="/logout" class="is-hidden">
                        @csrf
                    </form>
                </div>
            @else
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="/registreren" class="button is-link">
                            <strong>Sign up</strong>
                        </a>
                        <a href="/login" class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>
