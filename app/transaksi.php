<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\buku;

class transaksi extends Model
{
    //
    protected $table = 'transaksi';
    protected $fillable = ['id','id_buku','tgl_pinjam','tgl_kembali','status_pinjam'];
    public $timestamps = true;

    protected $primaryKey = 'id';

    public function buku()
    {
        return $this->belongsTo(buku::class,'id_buku','id_buku');
    }
}
