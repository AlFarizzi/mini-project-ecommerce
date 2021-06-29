@extends('welcome')

@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Login Pembeli</div>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        <br/>
                        <a href="{{route("pembeli.register")}}" class="">Belum Punya Akun ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
