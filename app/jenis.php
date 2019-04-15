<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    //
    protected $table = 'jenis';
    protected $fillable = ['id_jenis','jenis'];
    public $timestamps = true;

    protected $primaryKey = 'id_jenis';
}
