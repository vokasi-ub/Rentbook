<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis;
use DB;


class JenisController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mencari data
        if ($request->has('cari')) {
            $jenis = \App\Jenis::where('jenis','LIKE','%'.$request->cari.'%')->get();
        } else {
            $jenis = jenis::all();
        }
        return view('jenis.jenis', compact('jenis'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = jenis::where('nama_jenis', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('jenis')->insert([
             'id_jenis' => $request->id_jenis,
             'jenis' => $request->jenis,
                    
        ]);
         return redirect('/jenis');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
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
        $output = 'Daftar jenis';
        $jenis = jenis::get();
        return view('show', array(
          'jenis' => $output,
          'jenis' => $jenis
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $jenis = DB::table('jenis')->where('id_jenis',$id)->get();
    // passing data pegawai yang didapat ke view editjenis.blade.php
    return view('jenis.editjenis',['jenis' => $jenis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('jenis')->where('id_jenis',$request->id_jenis)->
        update(['id_jenis'=> $request->id_jenis,
        'jenis'=> $request->jenis])
        ;
        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        DB::table('jenis') -> where('id_jenis',$id)->delete();
        return redirect('/jenis');
    }
}