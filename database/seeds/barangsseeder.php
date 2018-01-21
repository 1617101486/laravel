<?php

use Illuminate\Database\Seeder;

class barangsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang=[['kode_barang'=>'123','Nama_barang'=>'aqua','harga'=>'1000'],
        		['kode_barang'=>'122','Nama_barang'=>'top','harga'=>'1500']];

        		DB::table('barangs')->insert($barang);
    }
}
