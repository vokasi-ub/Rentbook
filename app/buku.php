<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jenis;
class buku extends Model
{
    //
    protected $table = 'buku';
    protected $fillable = ['id_buku','id_jenis','judul','tahun_terbit','halaman','penulis','stok','gambarbuku'];
    public $timestamps = false;

    protected $primaryKey = 'id_buku';

    public function jenis()
    {
        return $this->belongsTo(jenis::class, 'id_jenis','id_jenis');
    }
  
}
