@extends('welcome')

@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
          Daftar Penjual
        </div>
        <div class="card-body">
            <form action="{{route("penjual.login")}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group mb-3 mt-3">
                    <button type= class="form-label""submit" class="btn btn-primary btn-sm">Daftar</button>
                   <br/>
                    <a href="{{route("penjual.register")}}" class="">Belum Punya Akun ?</a>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection
