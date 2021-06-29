@extends('welcome')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              Daftar Penjual
            </div>
            <div class="card-body">
                <form action="{{route("penjual.register")}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Nama</label>
                        <input type="text" name="nama"  class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">No.HP</label>
                        <input type="number" name="nohp" class="form-control" placeholder="No.HP">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">Password Confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <button type="submit" class="btn btn-primary btn-sm">Daftar</button>
                        <br/>
                        <a href="{{route("penjual.login")}}" class="">Sudah Punya Akun ?</a>
                    </div>
                </form>
            </div>
          </div>
    </div>

@endsection
