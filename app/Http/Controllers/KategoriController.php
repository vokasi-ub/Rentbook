<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use DB;


class kategoriController extends Controller
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
            $kategori = \App\Kategori::where('judul','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kategori = kategori::all();
        }
        return view('dashboard.kategori', compact('kategori'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = kategori::where('nama_kategori', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('buku')->insert([
             'id_jenis' => $request->id_jenis,
             'judul' => $request->judul,
             'tahun_terbit' => $request->tahun_terbit,
             'halaman' => $request->halaman,
             'penulis' => $request->penulis,
             'stok' => $request->stok            
        ]);
         return redirect('/kategori');
        
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
        $output = 'Daftar Kategori';
        $kategori = kategori::get();
        return view('show', array(
          'kategori' => $output,
          'kategori' => $kategori
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
    $kategori = DB::table('buku')->where('id_buku',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('dashboard.edit',['kategori' => $kategori]);
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
        DB::table('buku')->where('id_buku',$request->id)->
        update(['id_jenis'=>$request->id_jenis,
        'judul'=>$request->judul,
        'tahun_terbit'=>$request->tahun_terbit,
        'halaman'=>$request->halaman,
        'penulis'=>$request->penulis,
        'stok'=>$request->stok])
        ;
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        DB::table('buku') -> where('id_buku',$id)->delete();
        return redirect('/kategori');
    }
}