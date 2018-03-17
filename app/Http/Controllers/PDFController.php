<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPenjualan;
use App\User;
use App\Buku;
use PDF;

class PDFController extends Controller
{
    //
    public function pdf($id)
    {
    	$detailpenjualan = DetailPenjualan::all();
    	$karyawan = User::find($id);
    	return view('pdf', compact('detailpenjualan', 'id', 'karyawan'));
    }
}
