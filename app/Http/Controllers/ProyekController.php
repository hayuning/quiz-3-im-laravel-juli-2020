<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = DB::table('proyek')->get();
        //dd($proyek);
        return view('proyek.index', compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nama_proyek' => 'required|unique:proyek|max:100',
            'deskripsi' => 'required'
        ]); 
        $query = DB::table('proyek')->insert([ 
            "nama_proyek"=>$request["nama_proyek"], 
            "deskripsi" => $request["deskripsi"],
            "tgl_mulai" =>$request["tgl_mulai"],
            "tgl_deadline"=>$request["tgl_deadline"]
        ]);
        
        return redirect('/proyek')->with('success', 'Proyek baru berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyek= DB::table('proyek')->where('proyek_id', $id)->first();
        //dd($proyek);
        return view ('proyek.show', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    public function add_staff($id)
    {
        return view('proyek.add_staff');
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
    }
}
