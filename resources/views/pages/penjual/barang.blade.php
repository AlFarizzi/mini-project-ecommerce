@extends('welcome')

@section('content')


<div class="container mt-4">
        @if (Session::get("pesan"))
            <div id="alert" class="alert alert-success" role="alert">
                {{Session::get("pesan")}}
            </div>
        @endif
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Barang
        </button>

        <table class="table table-hover mt-3">
            <th>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </th>

            <td>
                @foreach ($barang as $b)
                    <tr>
                        <td>{{$b->nama_barang}}</td>
                        <td>Rp.{{number_format($b->harga)}}</td>
                        <td>{{$b->deskripsi}}</td>
                        <td>{{number_format($b->stok)}}</td>
                        <td>
                            <img src="/gambar/{{$b->gambar}}" alt="gambar barang" class="w-25">
                        </td>
                        <td>
                            <a href="{{route("penjual.hapus_barang", $b)}}"
                            class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ??')">
                                Hapus
                            </a>
                            <a id="updateModal" href="#" class="btn btn-warning btn-sm" data-idBarang="{{$b->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal2">Update</a>
                        </td>
                    </tr>
                @endforeach
            </td>

        </table>
    </div>
    @include('components.barang_modal')

@endsection
