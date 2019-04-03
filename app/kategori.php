<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $table = 'buku';
    protected $fillable = ['id_buku','id_jenis','judul','tahun_terbit','halaman','penulis','stok'];
    public $timestamps = true;

    protected $primaryKey = 'id_buku';
}
