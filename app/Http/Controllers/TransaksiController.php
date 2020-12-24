<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index($jenis)
    {
        if ($jenis == 'masuk') {
            // $books = bukuModel::latest()->simplePaginate(5);
            // $list = DB::table('buku')->where('id', $search)->get();

            $transaksi = Transaksi::latest()->where('status', 'proses')->paginate(5);
        } elseif ($jenis == 'keluar') {
            $transaksi = Transaksi::latest()->where('status', 'selesai')->orWhere('status', 'diambil')->orWhere('status', 'batal')->paginate(5);
        }

        return view('transaksi.index', ['transaksi' => $transaksi]);
    }
}
