@extends('welcome')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($barang as $b)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/gambar/{{$b->gambar}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{$b->nama_barang}}</h5>
                            <p class="card-text">
                                {{\Str::limit($b->deskripsi,100)}}
                            </p>
                            <a href="{{route("all.barang.detail",$b)}}" class="btn btn-primary btn-sm">Detail</a>
                            <p class="card-text"><small class="text-muted">
                               {{$b->created_at->diffForHumans()}}
                            </small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
