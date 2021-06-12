<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_buku extends Model
{
    protected $table = "jenis_buku";

    protected $fillable = ['id','judul','tahun_terbit'];
}

