<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\buku;
use DB;


class transaksiController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_buku = buku::all();
        $transaksi = transaksi::with(['buku'])->when($request->keyword, function ($query) use ($request){
            $query->where('id', 'like', "%{$request->keyword}%");
        })->get();
        return view('transaksi.transaksi', compact('transaksi','id_buku'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = transaksi::where('id_jenis', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('transaksi')->insert([
            'id' => $request->id,
             'id_buku' => $request->id_buku,
             'tgl_pinjam' => $request->tgl_pinjam,
             'status_pinjam' => $request->status_pinjam         
        ]);
        DB::table('buku')->where('id_buku',$request->id_buku)->decrement('stok', 1);
        
    

      return redirect ('/transaksi');
        
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
        $output = 'Daftar transaksi';
        $transaksi = transaksi::get();
        return view('show', array(
          'transaksi' => $output,
          'transaksi' => $transaksi
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
    $transaksi = DB::select('select a.*,b.* from transaksi a join buku b on a.id_buku = b.id_buku where a.id =?',[$id]);
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('transaksi.edittransaksi',compact('transaksi'));
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
        DB::table('transaksi')->where('id',$request->id)->
        update([
            'tgl_kembali'=> $request->tgl_kembali,
            'status_pinjam'=> $request->status_pinjam
            ]);
     

        DB::table('buku')->where('id_buku',$request->id_buku)->increment('stok', 1);
           

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        DB::table('transaksi')->where('id',$id)->delete();
        return redirect('/transaksi');
    }
}