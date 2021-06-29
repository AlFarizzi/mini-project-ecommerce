    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror ">
                        @error('nama_barang')
                            <div class="invalid-feedback" style="display: initial !important">
                                <script>
                                    $(window).on('load', function() {
                                        $('#exampleModal').modal('show')
                                    })
                                </script>
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                    <div class="invalid-feedback" style="display: initial !important">
                                        <script>
                                            $(window).on('load', function() {
                                                $('#exampleModal').modal('show')
                                            })
                                        </script>
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Stok</label>
                                <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
                                    @error('stok')
                                        <div class="invalid-feedback" style="display: initial !important">
                                            <script>
                                                $(window).on('load', function() {
                                                    $('#exampleModal').modal('show')
                                                })
                                            </script>
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') @enderror">
                        @error('gambar')
                            <div class="invalid-feedback" style="display: initial !important">
                                <script>
                                    $(window).on('load', function() {
                                        $('#exampleModal').modal('show')
                                    })
                                </script>
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback" style="display: initial !important">
                                <script>
                                    $(window).on('load', function() {
                                        $('#exampleModal').modal('show')
                                    })
                                </script>
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
          </div>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route("penjual.update_barang")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" id="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror ">
                            @error('nama_barang')
                                <div class="invalid-feedback" style="display: initial !important">
                                    <script>
                                        $(window).on('load', function() {
                                            $('#exampleModal').modal('show')
                                        })
                                    </script>
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror">
                                    @error('harga')
                                        <div class="invalid-feedback" style="display: initial !important">
                                            <script>
                                                $(window).on('load', function() {
                                                    $('#exampleModal').modal('show')
                                                })
                                            </script>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Stok</label>
                                    <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror">
                                        @error('stok')
                                            <div class="invalid-feedback" style="display: initial !important">
                                                <script>
                                                    $(window).on('load', function() {
                                                        $('#exampleModal').modal('show')
                                                    })
                                                </script>
                                                {{$message}}
                                            </div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control @error('gambar') @enderror">
                            @error('gambar')
                                <div class="invalid-feedback" style="display: initial !important">
                                    <script>
                                        $(window).on('load', function() {
                                            $('#exampleModal').modal('show')
                                        })
                                    </script>
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback" style="display: initial !important">
                                    <script>
                                        $(window).on('load', function() {
                                            $('#exampleModal').modal('show')
                                        })
                                    </script>
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
