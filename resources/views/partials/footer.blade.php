
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios@0.21.1/dist/axios.min.js"></script>
    <script>
        let alert = document.getElementById("alert");
        if(alert !== null) {
            setTimeout(() => {
                alert.remove();
            }, 1000);
        }

        let updateBtn = document.querySelectorAll("#updateModal")
        updateBtn.forEach(b => {
            b.addEventListener("click", async (e) => {
                let nama = document.getElementById("nama_barang");
                let harga = document.getElementById("harga")
                let stok = document.getElementById("stok")
                let desc = document.getElementById("deskripsi")
                let id = document.getElementById("id");

                let data = await axios.get('/api/get-barang', {params:{id:e.target.dataset.idbarang}})
                let barang = data.data

                nama.value = barang.nama_barang
                harga.value = barang.harga
                stok.value = barang.stok
                desc.value = barang.deskripsi
                id.value = barang.id

            })
        });
    </script>
</body>
</html>
