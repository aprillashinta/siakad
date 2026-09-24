<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h2>Data Siswa</h2>
    <hr>

    <a href="/tambah" class="btn btn-warning mb-3">
        Tambah
    </a>

    <a href="/pdf" class="btn btn-secondary mb-3">
        Cetak PDF
    </a>

    <a href="/csv" class="btn btn-info mb-3">
        Export CSV
    </a>

    <a href="/excel" class="btn btn-primary mb-3">
        Export Excel
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Kontak</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($data as $datas)

            <tr>
                <td>{{ $datas->nisn }}</td>
                <td>{{ $datas->nama }}</td>
                <td>{{ $datas->alamat }}</td>
                <td>{{ $datas->jenkel }}</td>
                <td>{{ $datas->kontak }}</td>

                <td>

                    <a href="/siswa/ubah/{{ $datas->nisn }}"
                       class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <a href="/siswa/hapus/{{ $datas->nisn }}"
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                        Hapus
                    </a>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

</body>
</html>