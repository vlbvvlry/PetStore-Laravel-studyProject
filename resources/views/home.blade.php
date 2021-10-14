@extends('Layout.layout')

@section('title')
<title>Home</title>
@endsection

@section('cnt')
<!-- Кнопка-триггер модального окна -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Jryj
</button> -->

<!-- Модальное окно -->
<!-- <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
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
</div> -->

<!-- <div class="modal fade" id="signupModal" aria-hidden="true">
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
</div> -->
@endsection