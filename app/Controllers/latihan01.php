<?php

namespace App\Controllers;

use App\Models\model_latihan1;

class Latihan01 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        
    }
    
    public function penjumlahan($n1, $n2){
        // $model = new model_latihan1(); 
        // $hasil = $model->jumlah($n1,$n2);
        // echo "Hasil penjumlahan Dari ". $n1 ." + ". $n2 ." = ". $hasil;

        $model = new model_latihan1();
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $model-> jumlah($n1,$n2);
        return view('view_latihan', $data);
        
    }
}