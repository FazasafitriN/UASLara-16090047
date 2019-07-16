<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{


    protected $table = "wisata_tbl";
    protected $fillable = [
     'tujuan_wisata', 'jenis_trip', 'tanggal', 'alamat'
    ];
}
