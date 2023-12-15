<header>
    <nav class="h-100 py-2 px-5 bg-dark text-light gap-5 border border-black">
        <div class="h-100 d-flex align-items-center justify-content-between ">
            <ul class="navbar-nav d-flex flex-row gap-4">
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('admin.home') }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('admin.heroes.index') }}">
                        Heroes List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('admin.races.index') }}">
                        Races List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('admin.heroes.create') }}">
                        New Hero
                    </a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-light">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
        </div>
    </nav>
</header>
