<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class Siswacontroller extends Controller
{
    public function percobaan()
    {
    	$a= Siswa::all();
    	return view('siswa', compact('a'));
 
    }

    public function show()
    {
    	$a=Siswa::find(1);
    	 return $a;
    }

    
}
