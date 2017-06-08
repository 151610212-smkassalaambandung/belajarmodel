<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function percobaan()
    {
    	$w="Ikha";
    	return "Nama saya adalah " .$w;
    }
    public function percobaan2()
    {
    	return view('about');
    }
    public function percobaan3()
    {
    	$a="Ikha";
    	return view('latihan.saya', compact('a'));
    }
     public function percobaan4()
    {
    	$a="ikha";
    	$b="xii rpl2";
    	$c="smk assalaam";
    	return view('latihan.kelas', compact('a','b','c'));
    }
    public function percobaan5()
    {
    	$a="1";
    	$b="2";
    	$c="3";
    	return view('seleksi', compact('a','b','c'));
    }
    public function percobaan6()
    {
    	$buah=['mangga','jeruk','apel','anggur'];
    	return view('buah', compact('buah'));
    }

    public function percobaan7()
    {
    	$buah=['mangga','jeruk','apel','anggur','nanas'];
    	$hewan=['kucing','kelinci','burung','rusa','bebek'];
    	$komputer=['assus','samsung','lg','acer','lenovo'];
    	return view('data', compact('buah','hewan','komputer'));
    }

    public function percobaan8($data,$data2)
    {
    	$semua=['buah'=>['mangga','jeruk','apel','anggur'],
                'hewan'=>['kucing','kelinci','burung','rusa','bebek'],
                'komputer'=>['assus','samsung','lg','acer','lenovo'],
                'kucing'=>['anggora','garong']];

        $kiw=$semua[$data];
        $hihi =$semua[$data2];
    	 return view('buah', compact('kiw','data'));
    }


}
