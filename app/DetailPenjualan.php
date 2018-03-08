<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    //
    protected $fillable = ['nama', 'alamat', 'id_buku', 'jumlah', 'total_harga'];
    protected $visible = ['nama', 'alamat', 'id_buku', 'jumlah', 'total_harga'];
    public $timestamps = true;

    public function buku()
    {
    	return $this->belongsTo('App\Buku', 'id_buku');
    }
}
