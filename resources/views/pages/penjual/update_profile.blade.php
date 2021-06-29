@extends('welcome')

@section('content')
    <div class="container mt-3">
        @if (Session::get("pesan"))
        <div id="alert" class="alert alert-success" role="alert">
            {{Session::get("pesan")}}
        </div>
    @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Data Penjual</div>
                    </div>
                    <div class="card-body">
                        <form action="{{route("penjual.update_profile")}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{Auth::user()->nama}}">
                                @error('nama')
                                    <div class="invalid-feedback" style="display: initial !important">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}">
                                @error('email')
                                    <div class="invalid-feedback" style="display: initial !important">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{Auth::user()->alamat}}">
                                @error('alamat')
                                    <div class="invalid-feedback" style="display: initial !important">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Password Penjual</div>
                    </div>
                    <div class="card-body">
                        <form action="{{route("penjual.update_password")}}" method="post">
                            @method("put")
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Password Lama</label>
                                <input type="password" name="password_lama" id="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password Baru</label>
                                        <input type="password" name="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Konfirmasi Password Baru</label>
                                        <input type="password" name="password_confirmation" name="password_confirmation" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sm">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
