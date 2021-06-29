@extends('welcome')

@section('content')
    <div class="container mt-5">
        <div class="card mb-3" style="border: 0px !important;">
            <img src="/gambar/{{$b->gambar}}"  class="card-img-top w-50" alt="...">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="btn btn-primary btn-sm mb-3 mt-3">Keranjang</a>
                    </div>
                </div>
              <h5 class="card-title">{{$b->nama_barang}}</h5>
              <p class="card-text">
                {{$b->deskripsi}}
                </p>
              <p class="card-text">
                  <small class="text-muted">
                        {{$b->created_at->diffForHumans()}}
                    </small>
                </p>
            </div>
          </div>
    </div>
@endsection
