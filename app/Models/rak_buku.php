<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rak_buku extends Model
{
    protected $table = "rak_buku";

    protected $fillable = ['id','judul','tahun_terbit'];
}