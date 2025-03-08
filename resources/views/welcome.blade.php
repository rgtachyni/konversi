<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konversi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container mt-5" style="background-color: #fffff0">
    <div style="margin-left: 150px; margin-right: 150px;">
        <h2 class="text-center mb-5">KONVERSI HARI</h2>
        <div class="d-flex justify-content-around">
            <div class="d-flex gap-2">
                <img src="{{ url('menu.png') }}" alt="" style="width: 5%">
                <h4>Menu</h4>

            </div>
            <div class="d-flex justify-content-end">
                <img src="{{ url('setting-lines.png') }}" alt="" style="width: 7%">
            </div>
        </div>
        <h4 class="text-center border-bottom border-dark pb-3"> Hitung Hari</h4>
        <div class="mb-4" style="margin-top: 40px">
            <label for="tanggalMulai" class="form-label">Tanggal Mulai:</label>
            <input type="date" id="tanggalMulai" class="form-control" style="background-color: #ffc0c8">
        </div>
        <div class="mb-5">
            <label for="tanggalAkhir" class="form-label">Tanggal Akhir:</label>
            <input type="date" id="tanggalAkhir" class="form-control" style="background-color: #ffc0c8">
        </div>
        {{-- <button class="btn btn-primary " onclick="hitungHari()" style="background-color: #ff889c">Hitung Durasi</button> --}}

        <div class="d-grid mt-10">
            <button class="btn btn-primary" type="button" onclick="hitungHari()"
                style="background-color: #ff889c">HASIL</button>
        </div>
        <h4 class="mt-3" id="hasil"></h4>
    </div>
    <script>
        function hitungHari() {
            let mulai = new Date(document.getElementById("tanggalMulai").value);
            let akhir = new Date(document.getElementById("tanggalAkhir").value);

            if (!isNaN(mulai) && !isNaN(akhir)) {
                if (akhir >= mulai) {
                    let selisih = Math.ceil((akhir - mulai) / (1000 * 60 * 60 * 24));
                    let tahun = Math.floor(selisih / 365);
                    let sisaHari = selisih % 365;
                    let bulan = Math.floor(sisaHari / 30);
                    sisaHari %= 30;
                    let minggu = Math.floor(sisaHari / 7);
                    let hari = sisaHari % 7;

                    document.getElementById("hasil").innerText =
                        `Selisih: ${tahun} tahun, ${bulan} bulan, ${minggu} minggu, ${hari} hari`;
                } else {
                    document.getElementById("hasil").innerText = "Tanggal akhir harus lebih besar ";
                }
            } else {
                document.getElementById("hasil").innerText = "Silakan pilih tanggal yang valid.";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
