<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="svg\pet.svg" width="50" height="50">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <!-- <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li> -->
    </ul>

    <div class="col-md-3 text-end">
        <!-- <a href="/login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
        <a href="/reg"><button type="button" class="btn btn-primary">Sign-up</button></a> -->
        <!-- <button type="button" class="btn btn-primary" style="margin: 0px 5px 0px 0px" data-bs-toggle="modal" data-bs-target="#signinModal">
            Sign in
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
            Sign up
        </button> -->
        @if(!Auth::check())
        <a href="/login"><button type="button" class="btn">Log in</button></a>
        <a href="/registration"><button type="button" class="btn btn-primary">Sign up</button></a>
        @else
        <a href="/private"><button type="button" class="btn">Profile</button></a>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
        @endif
    </div>
</header>

<div class="modal fade" id="signupModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Sign up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="" action="">
                    <div class="container">
                        <div class="input-group-md mb-5">
                            <input class="form-control mb-3" type="text" placeholder="username">
                            <input class="form-control mb-3" type="password" placeholder="password">
                            <input class="form-control" type="password" placeholder="repeat password">
                        </div>
                        <div class="container">
                            <button type="button" class="btn-md btn-primary w-100">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signinModalLabel">Sign in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form method="" action="/auth/login">
                    <div class="container">
                        <div class="input-group-md form-group mb-3">
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="input-group-md form-group mb-5">
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="container">
                            <button type="button" class="btn-md btn-primary w-100">LOG IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>