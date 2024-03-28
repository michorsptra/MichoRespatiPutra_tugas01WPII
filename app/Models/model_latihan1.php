<?php

namespace app\models;
use CodeIgniter\Model;

class model_latihan1 extends Model{
    // membuat variabel untuk menampung nilai

    public function jumlah($n1,$n2){
        return $n1 + $n2;
    }

}