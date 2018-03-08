<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = User::all();
        return view('/home', compact('karyawan'));
    }

    public function send()
    {
        $validator = Validator::make(request()->all(), [
            'nama'  => 'required|max:30',
            'email' => 'required|max:100|email',
        ]);
        
        if ($validator->fails()) {
            redirect()
                ->back()
                ->withErrors($validator->errors());
        }
    }
}
