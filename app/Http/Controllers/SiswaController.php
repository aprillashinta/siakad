<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Siswa;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class SiswaController extends Controller
{
    public function index(): View
    {
        return view('dashboard');
    }

    public function tampil(): View
    {
        $data = Siswa::all();

        return view('siswa', [
            'data' => $data
        ]);
    }

    public function tambah(): View
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        $array = [
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'jenkel' => $request->jenkel,
            'kontak' => $request->kontak
        ];

        Siswa::create($array);

        return redirect('/siswa');
    }

    public function ubah(Request $request): View
    {
        $data = Siswa::where(
            'nisn',
            $request->nisn
        )->get();

        return view('ubah', [
            'data' => $data
        ]);
    }

    public function edit(Request $request)
    {
        $data = [
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'jenkel' => $request->jenkel,
            'kontak' => $request->kontak
        ];

        Siswa::where(
            'nisn',
            $request->nisn
        )->update($data);

        return redirect('/siswa');
    }

    public function hapus(Request $request)
    {
        Siswa::where(
            'nisn',
            $request->nisn
        )->delete();

        return redirect('/siswa');
    }

    public function pdf(Request $request)
    {
        $data = Siswa::all();

        $pdf = PDF::loadview('pdf', [
            'data' => $data
        ]);

        return $pdf->download('laporan.pdf');
    }

    public function exportCsv(Request $request)
    {
        $fileName = 'laporan.csv';

        $laporans = Siswa::all();

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate",
            "Expires"             => "0"
        ];

        $callback = function () use ($laporans) {

            $handle = fopen('php://output', 'w');

            fputcsv($handle,
                ['ID','Nama','Alamat','Jenis Kelamin']
            );

            foreach ($laporans as $laporan) {

                fputcsv($handle, [
                    $laporan->nisn,
                    $laporan->nama,
                    $laporan->alamat,
                    $laporan->jenkel
                ]);
            }

            fclose($handle);
        };

        return Response()->stream(
            $callback,
            200,
            $headers
        );
    }

    public function excel(Request $request)
    {
        $fileName = 'laporan.xls';

        $laporans = Siswa::all();

        $headers = [
            "Content-Type"        => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate",
            "Expires"             => "0"
        ];

        $callback = function () use ($laporans) {

            $handle = fopen('php://output', 'w');

            echo "ID\tNama\tAlamat\tJenis Kelamin\n";

            foreach ($laporans as $laporan) {

                echo $laporan->nisn . "\t";
                echo $laporan->nama . "\t";
                echo $laporan->alamat . "\t";
                echo $laporan->jenkel . "\n";
            }

            fclose($handle);
        };

        return response()->stream(
            $callback,
            200,
            $headers
        );
    }
}