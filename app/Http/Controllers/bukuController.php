<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use App\jenis;
use DB;


class bukuController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mencari data
        $jenis = jenis::All();
        $buku = buku::when($request->keyword, function ($query) use ($request){
            $query->where('judul', 'like', "%{$request->keyword}%");
        })->get();
        return view('buku.buku',compact('buku','jenis'));
       
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = buku::where('id_jenis', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambarbuku');
        $fileName = $file->getClientOriginalName();
        $request->file('gambarbuku')->move("image/",$fileName);

        $galeri = new buku([
            'id_buku' => $request->id_buku,
            'id_jenis' => $request->id_jenis,
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'halaman' => $request->halaman,
            'penulis' => $request->penulis,
            'stok' => $request->stok,
            'gambarbuku' => $fileName
        ]);

        $galeri->save();
        return redirect('buku')->with('success','Data ditambahkan');
        
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
        $output = 'Daftar buku';
        $buku = buku::get();
        return view('show', array(
          'buku' => $output,
          'buku' => $buku
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
        $data = buku::all();
        $buku = buku::all();
        $editbuku = buku::find($id);
    $buku = DB::table('buku')->where('id_buku',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('buku.edit',['buku' => $buku]);
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
        if (empty($request->file('gambarbuku'))){
            $buku = buku::find($request->id_buku);
            $buku->id_jenis= $request->id_jenis;
            $buku->judul= $request->judul;
            $buku->tahun_terbit= $request->tahun_terbit;
            $buku->halaman= $request->halaman;
            $buku->penulis= $request->penulis;
            $buku->stok= $request->stok;
            $buku->gambarbuku= $request->gambarbuku;
            $buku->save();
        }
        else{
            $file = $request->file('gambarbuku');
            $fileName = $file->getClientOriginalName();
            $request->file('gambarbuku')->move("image/", $fileName);

            $buku = buku::find($request->id_buku);
            $buku->id_jenis= $request->id_jenis;
            $buku->judul= $request->judul;
            $buku->tahun_terbit= $request->tahun_terbit;
            $buku->halaman= $request->halaman;
            $buku->penulis= $request->penulis;
            $buku->stok= $request->stok;
            $buku->gambarbuku= $request->gambarbuku;
            $buku->gambarbuku = $fileName;
    
            $buku->save();
        }



       
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        DB::table('buku')->where('id_buku',$id)->delete();
        return redirect('/buku');
    }
}