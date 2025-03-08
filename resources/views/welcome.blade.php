<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container mt-5">
    <h2 class="text-center">Konversi Hari</h2>
    <div class="mb-3">
        <label for="tanggalMulai" class="form-label">Tanggal Mulai:</label>
        <input type="date" id="tanggalMulai" class="form-control">
    </div>
    <div class="mb-3">
        <label for="tanggalAkhir" class="form-label">Tanggal Akhir:</label>
        <input type="date" id="tanggalAkhir" class="form-control">
    </div>
    <button class="btn btn-primary" onclick="">Hitung Hari ke bulan</button>
    <h4 class="mt-3" id="hasil"></h4>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
