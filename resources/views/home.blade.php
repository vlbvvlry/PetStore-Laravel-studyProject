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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form method="" action="/auth/login">
                    <div class="container">                       
                    <div class="input-group-lg form-group mb-3">
						<input type="text" class="form-control" placeholder="username">						
					</div>
					<div class="input-group-lg form-group mb-3">
						<input type="password" class="form-control" placeholder="password">
					</div>
                        <!-- <hr>
                        <button type="submit" class="loginbtn">Login</button> -->
                        <div class="container text-center">
                            <button type="button" class="btn btn-primary">LOG IN</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div> -->
        </div>
    </div>
</div>
@endsection