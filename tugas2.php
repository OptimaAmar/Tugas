<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-image: url('https://cdn.pixabay.com/animation/2022/12/08/16/38/16-38-28-429_256.gif');
            /* Custom latar belakang */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: white;
    }
    </style>
</head>

<body>      
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Jumlah Harga Pembelian</h4>
                    </div>
                    <div class="card-body">
                        <form id="totalPembelianForm">
                            <div class="mb-3">
                                <label for="kartuMember" class="form-label">Apakah Anda Memiliki Kartu Member?</label>
                                <select class="form-select" id="kartuMember">
                                    <option value="true">Ya</option>
                                    <option value="false">Tidak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nominalPembelian" class="form-label">Nominal Pembelian (Rp)</label>
                                <input type="number" class="form-control" id="nominalPembelian" required>
                            </div>
                            <button type="button" class="btn btn-success w-100" onclick="hitungTotal()">Hitung Total</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div id="result" class="alert alert-info text-center d-none"></div>
            </div>
        </div>
    </div>

    <script>
        function hitungTotal() {
            const kartuMember = document.getElementById("kartuMember").value === "true";
            const nominalPembelian = parseInt(document.getElementById("nominalPembelian").value, 10);
            let diskon = 0;

            if (kartuMember) {
                if (nominalPembelian >= 500000) {
                    diskon = 0.20; // Diskon 20% untuk pembelian >= Rp 500.000
                } else if (nominalPembelian >= 300000) {
                    diskon = 0.15; // Diskon 15% untuk pembelian >= Rp 300.000
                } else {
                    diskon = 0.10; // Diskon 10% untuk pembelian < Rp 300.000
                }
            } else {
                if (nominalPembelian >= 500000) {
                    diskon = 0.10; // Diskon 10% untuk pembelian >= Rp 500.000
                }
            }

            const totalKeseluruhan = nominalPembelian - (nominalPembelian * diskon);
            const resultElement = document.getElementById("result");
            resultElement.textContent = "Total yang harus dibayar sebanyak: Rp " + totalKeseluruhan.toLocaleString("id-ID");
            resultElement.classList.remove("d-none");
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
