<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1">

<title>Ubah Data Siswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h3>Form Ubah Data</h3>

<hr>

@foreach($data as $datas)

<form action="/ubah" method="post">

    @csrf

    <label>NISN</label>

    <input type="text"
           name="nisn"
           class="form-control"
           value="{{ $datas->nisn }}"
           readonly>

    <br>

    <label>Nama</label>

    <input type="text"
           name="nama"
           class="form-control"
           value="{{ $datas->nama }}">

    <br>

    <label>Alamat</label>

    <input type="text"
           name="alamat"
           class="form-control"
           value="{{ $datas->alamat }}">

    <br>

    <label>Jenis Kelamin</label>

    <select name="jenkel"
            class="form-control">

        <option value="L"
        {{ $datas->jenkel == 'L' ? 'selected' : '' }}>
            Laki-laki
        </option>

        <option value="P"
        {{ $datas->jenkel == 'P' ? 'selected' : '' }}>
            Perempuan
        </option>

    </select>

    <br>

    <label>Kontak</label>

    <input type="text"
           name="kontak"
           class="form-control"
           value="{{ $datas->kontak }}">

    <br>

    <button type="submit"
            class="btn btn-success">

        Update

    </button>

    <a href="/siswa"
       class="btn btn-danger">

       Kembali

    </a>

</form>

@endforeach

</div>

</body>
</html>