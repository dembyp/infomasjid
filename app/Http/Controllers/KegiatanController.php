<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Masjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {
        //Menampilkan Index Kegiatan
       // $user = Auth::user();
        $masjids = Masjid::all();
        $kegiatans = Kegiatan::latest()->paginate(5);
        return view('kegiatan.index', compact('kegiatans','masjids'))
                  ->with('i', (request()->input('page',1) -1)*5);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  
        //return view('kegiatan.create');
        $masjids = Masjid::all();

        return view('kegiatan.create', compact('masjids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'pengisi_acara' => 'required',
            'waktu_mulai' => 'required',
            'waktu_berakhir' => 'required',
            'contact' => 'required'
            //'user_id' => auth()->id()
          ]);

          //echo 'user_id'=>Auth::id();
          //'user_id' => Auth::user()->id;
          Kegiatan::create([
              'user_id'=>$request->user()->id,
              'masjid_id'=>$request->masjid_id,
              'name' => $request->name,
              'description' => $request->description,
              'pengisi_acara' => $request->pengisi_acara,
              'waktu_mulai' => $request->waktu_mulai,
              'waktu_berakhir' => $request->waktu_berakhir,
              'contact' => $request->contact
          //$request->all()
        ]);
          return redirect()->route('kegiatan.index')
                          ->with('success', 'Data Kegiatan Baru Berhasil Ditambahkan');
    
  
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.detail', compact('kegiatan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $masjids = Masjid::all();
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.edit', compact('kegiatan','masjids'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:5',
            'pengisi_acara' => 'required|min:5',
            'waktu_mulai' => 'required',
            'waktu_berakhir' => 'required',
            'contact' => 'required'   
            ]);
          $kegiatan = Kegiatan::find($id);
          $kegiatan->name = $request->get('name');
          $kegiatan->description = $request->get('description');
          $kegiatan->pengisi_acara = $request->get('pengisi_acara');
          $kegiatan->waktu_mulai = $request->get('waktu_mulai');
          $kegiatan->waktu_berakhir = $request->get('waktu_berakhir');
          $kegiatan->contact = $request->get('contact');
          //$kegiatan->user_id = $request->user()->id;
          $kegiatan->save();
          return redirect()->route('kegiatan.index')
                          ->with('success', 'Data Kegiatan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')
                        ->with('success', 'Data Kegiatan deleted successfully');
    }
}
