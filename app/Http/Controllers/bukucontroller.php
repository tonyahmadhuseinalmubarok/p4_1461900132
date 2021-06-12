<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\DATA_1461900132;
use App\Models\buku;
use App\Models\jenis_buku;
use App\Models\rak_buku;


class bukucontroller extends Controller
{
    public function view(){
        $data=DB::table('rak_buku')->join('buku','rak_buku.id_buku', '=', 'buku.id')->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')->get();      
        return view('buku', ['boku' => $data,
        ]);

    }
    public function export(){
		return Excel::download(new DATA_1461900132, 'DATA_1461900132.xlsx');
	}


}