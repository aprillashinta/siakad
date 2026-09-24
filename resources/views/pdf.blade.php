<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<title>Laporan Data Siswa</title>

<style>

table{
    width:100%;
    border-collapse:collapse;
}

table, th, td{
    border:1px solid black;
}

th, td{
    padding:8px;
}

</style>

</head>

<body>

<h3 align="center">
LAPORAN DATA SISWA
</h3>

<table>

<thead>

<tr>
    <th>NISN</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Kontak</th>
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

</tr>

@endforeach

</tbody>

</table>

</body>
</html>