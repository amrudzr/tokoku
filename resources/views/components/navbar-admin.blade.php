<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Tokoku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Route::currentRouteName() === 'dashboard' ? 'active text-primary' : '' }}"
                    href="{{ route('dashboard') }}">Dashboard</a>
                <a class="nav-link {{ Route::currentRouteName() === 'products' ? 'active text-primary' : '' }}"
                    href="{{ route('products') }}">Products</a>
                <a class="nav-link {{ Route::currentRouteName() === 'users' ? 'active text-primary' : '' }}"
                    href="{{ route('users') }}">Users</a>
                <a class="nav-link {{ Route::currentRouteName() === 'transactions' ? 'active text-primary' : '' }}"
                    href="{{ route('transactions') }}">Transactions</a>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-danger" type="button" href="{{ route('admin.logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
