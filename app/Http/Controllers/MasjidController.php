<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasjidController extends Controller
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
        //Menampilkan Index Masjid
       // $user = Auth::user();
        $masjids = Masjid::latest()->paginate(5);
        return view('masjid.index', compact('masjids'))
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
        return view('masjid.create');
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
            'name' => 'required|min:5',
            'address' => 'required|min:5',
            'city' => 'required|min:5',
            'long' => 'required',
            'lat' => 'required',
            'phone' => 'required',
            'email' => 'required'
            //'user_id' => auth()->id()
          ]);

          //echo 'user_id'=>Auth::id();
          //'user_id' => Auth::user()->id;
          Masjid::create([
              'user_id'=>$request->user()->id,
              'name' => $request->name,
              'address' => $request->address,
              'city' => $request->city,
              'long' => $request->long,
              'lat' => $request->lat,
              'phone' => $request->phone,
              'email' => $request->email
          //$request->all()
        ]);
          return redirect()->route('masjid.index')
                          ->with('success', 'Data Masjid Baru Berhasil Ditambahkan');
    
  
  
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
        $masjid = Masjid::find($id);
        return view('masjid.detail', compact('masjid'));

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
        $masjid = Masjid::find($id);
        return view('masjid.edit', compact('masjid'));

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
            'address' => 'required|min:5',
            'city' => 'required|min:5',
            'long' => 'required',
            'lat' => 'required',
            'phone' => 'required',
            'email' => 'required',          
            ]);
          $masjid = Masjid::find($id);
          $masjid->name = $request->get('name');
          $masjid->address = $request->get('address');
          $masjid->city = $request->get('city');
          $masjid->long = $request->get('long');
          $masjid->lat = $request->get('lat');
          $masjid->phone = $request->get('phone');
          $masjid->email = $request->get('email');
          //$masjid->user_id = $request->user()->id;
          $masjid->save();
          return redirect()->route('masjid.index')
                          ->with('success', 'Data Masjid Berhasil Diubah');
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
        $masjid = Masjid::find($id);
        $masjid->delete();
        return redirect()->route('masjid.index')
                        ->with('success', 'Data Masjid deleted successfully');
    }
}
