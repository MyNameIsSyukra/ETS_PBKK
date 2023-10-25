<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class formController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->foto->storeAs('public', $request->foto->getClientOriginalName());

        Pasien::create([
            'pasien' => $request->pasien,
            'dokter' => $request->dokter,
            'status' => $request->status,
            'suhu' => $request->suhu,
            'foto' => $request->foto->getClientOriginalName(),
        ]);
        return redirect('/result')->with(['status' => 'success']);
    }

    public function result() {
        $col = collect(Pasien::all());        
        return view('result',$col->last());
    }
    public function showAll(){
        $data = Pasien::all();
        return view('showall',compact('data'));
    }
}