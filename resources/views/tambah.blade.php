<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Tambah Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

<div class="container mt-4">

    <h3>Form Tambah Siswa</h3>

    <hr>

    <form action="/simpan" method="post">

        @csrf

        <label>Nama</label>

        <input type="text"
               name="nama"
               class="form-control"
               required>

        <br>

        <label>Alamat</label>

        <input type="text"
               name="alamat"
               class="form-control"
               required>

        <br>

        <label>Jenis Kelamin</label>

        <select name="jenkel"
                class="form-control">

            <option value="L">
                Laki-laki
            </option>

            <option value="P">
                Perempuan
            </option>

        </select>

        <br>

        <label>Kontak</label>

        <input type="text"
               name="kontak"
               class="form-control"
               required>

        <br>

        <button type="submit"
                class="btn btn-secondary">

            Simpan

        </button>

        <a href="/siswa"
           class="btn btn-danger">

           Kembali

        </a>

    </form>

</div>

</body>
</html>