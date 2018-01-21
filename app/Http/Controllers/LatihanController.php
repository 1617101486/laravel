<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class LatihanController extends Controller
{
 



	public function index()
	{
		return view('latihan');}
	

	public function index1()
	{
		return view('latihan1');}
	
	public function index2()
	{
		return view('latihan2');}
	
	public function index3()
	{
		return view('latihan3');}
	
	public function index4()
	{
		$barang=Barang::all();
    	return view('barang3', compact('barang'));
	}
}

