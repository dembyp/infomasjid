<?php

namespace App\Http\Controllers;

use App\Models\Awal;
use App\Models\Kegiatan;
use App\Models\Masjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
  // Ignores notices and reports all other kinds... and warnings
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
  // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
  }
class AwalController extends Controller
{
  
    public function index()
    {

        $kegiatans = Kegiatan::with('masjid')->orderBy('created_at','DESC')->take(6)->get();
        return view('awal', compact('kegiatans'));
    }

    public function detail($id) 
    {
      $kegiatans = Kegiatan::find($id);
      //echo count($kegiatans);
      if(count($kegiatans) > 0) {
    		$data = array(
    			'kegiatans' => $kegiatans);
      return view("detailawal", $data);
    	}else {
    		return redirect('/');
    	}
    }

    public function list()
    {
      $data = array(
        'kegiatans' => Kegiatan::orderBy('waktu_mulai','DESC')->get()
      );
      return view('listawal',$data);
           // ->with('i', (request()->input('page',1) -1)*5);
    }

    
}
