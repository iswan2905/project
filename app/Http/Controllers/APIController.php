<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class APIController extends Controller
{
    //
    public function listdata()
    {
    	# code...
    	$listdata = Buku::all();
    	return $listdata;
    }
}
