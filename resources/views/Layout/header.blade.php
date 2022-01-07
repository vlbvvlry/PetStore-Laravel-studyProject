<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between px-4 py-2 mb-0 border-bottom" >
    <a href="/" class="col-md-2 text-dark text-decoration-none">
        <h2>ZOOSHOP</h2>
    </a>

    <ul class="nav col-12 col-md-auto justify-content-center text-center">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="/items" class="nav-link px-2 link-dark">Products</a></li>
    </ul>

    <div class="col-md-2 text-end">
        @if(!Auth::check())
        <a href="/login"><button type="button" class="btn">Log in</button></a>
        <a href="/registration"><button type="button" class="btn btn-primary">Sign up</button></a>
        @else
        <!-- <a href="/private"><button type="button" class="btn">Profile</button></a> -->
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="profile"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
            </button>
            <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
            <div class="dropdown-menu mt-2" aria-labelledby="profile">
                @if(auth()->user()->admin == 1)
                <a class="dropdown-item" href="/admin">Admin Panel</a>
                @endif
                <a class="dropdown-item" href="/cart">Cart</a>
                <a class="dropdown-item" href="/private">History</a>
            </div>
        </div>
        @endif
    </div>
</header>