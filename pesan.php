<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/bootstrap533/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="card shadow-sm" style="width: 28rem;">
    <div class="card-body">
      <h4 class="card-title text-center mb-5">Formulir Pemesanan</h4>
      <form id="formPemesanan">

        <div class="mb-3">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Atas Nama" required>
        </div>

        <div class="mb-3">
          <input type="tel" class="form-control" id="no_telephone" name="no_telephone" placeholder="No.Telepon" required>
        </div>

        <div class="mb-3">
          <select class="form-select" id="jenis_pesanan" name="jenis_pesanan" onchange="togglePesananOptions()" required>
            <option value="" selected disabled>Jenis Pesanan</option>
            <option value="Produk">Produk</option>
            <option value="Jasa">Jasa</option>
          </select>
        </div>

        <div id="produkSection" class="mb-3" style="display: none;">
          <select class="form-select" id="produk" name="produk">
            <option value="" selected disabled>Pilih Produk</option>
            <option value="Produk 1">Produk 1</option>
            <option value="Produk 2">Produk 2</option>
            <option value="Produk 3">Produk 3</option>
            <option value="Produk 4">Produk 4</option>
            <option value="Produk 5">Produk 5</option>
            <option value="Produk 6">Produk 6</option>
            <option value="Produk 7">Produk 7</option>
            <option value="Produk 8">Produk 8</option>
          </select>
          <div class="mt-3">
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" placeholder="Jumlah Produk">
          </div>
        </div>

        <div id="jasaSection" class="mb-3" style="display: none;">
          <select class="form-select" id="jasa" name="jasa">
            <option value="" selected disabled>Pilih Jasa</option>
            <option value="Cetak Dokumen">Cetak Dokumen</option>
            <option value="Cetak Kartu Nama">Cetak Kartu Nama</option>
            <option value="Cetak Foto">Cetak Foto</option>
            <option value="Cetak Stiker">Cetak Stiker</option>
            <option value="Cetak Undangan">Cetak Undangan</option>
            <option value="Laminating">Laminating</option>
            <option value="Makalah">Makalah</option>
            <option value="Top up Game">Top Up Game</option>
          </select>
          <div class="mt-3">
            <input type="file" class="form-control" id="file" name="file">
          </div>
        </div>

        <div class="d-flex gap-2">
          <button type="button" class="btn btn-pesan flex-fill" onclick="submitForm()">Kirim</button>
          <a href="index.php" class="btn btn-pesan flex-fill">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="bootstrap/bootstrap533/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.js"></script>

<script>
  function togglePesananOptions() {
    const jenisPesanan = document.getElementById("jenis_pesanan").value;
    const produkSection = document.getElementById("produkSection");
    const jasaSection = document.getElementById("jasaSection");

    if (jenisPesanan === "Produk") {
      produkSection.style.display = "block";
      jasaSection.style.display = "none";
    } else if (jenisPesanan === "Jasa") {
      produkSection.style.display = "none";
      jasaSection.style.display = "block";
    } else {
      produkSection.style.display = "none";
      jasaSection.style.display = "none";
    }
  }

  function submitForm() {
    const jenisPesanan = document.getElementById("jenis_pesanan").value;
    const nama = document.getElementById("nama").value.trim();
    const noTelephone = document.getElementById("no_telephone").value.trim();

    if (!nama || !noTelephone || !jenisPesanan) {
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Label mohon diisi!',
      });
      return;
    }

    if (jenisPesanan === "Produk") {
      const produk = document.getElementById("produk").value;
      const jumlah = document.getElementById("jumlah").value;

      if (!produk || !jumlah) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Label mohon diisi!',
        });
        return;
      }

      Swal.fire({
        icon: 'success',
        title: 'Pesanan berhasil!',
        text: `Pesanan (${produk}, Jumlah: ${jumlah}) terkirim!`,
      });

    } else if (jenisPesanan === "Jasa") {
      const jasa = document.getElementById("jasa").value;
      const file = document.getElementById("file").value;

      if (!jasa || !file) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Label mohon diisi!',
        });
        return;
      }

      Swal.fire({
        icon: 'success',
        title: 'Pesanan berhasil!',
        text: `Pesanan (${jasa}) terkirim!`,
      });
    }

    document.getElementById("formPemesanan").reset();
    togglePesananOptions();
  }
</script>

</body>
</html>