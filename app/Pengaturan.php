<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $primaryKey = "id";
    protected $fillable= ['nama_kegiatan','dt_mulai','dt_akhir','pg_mulai','pg_akhir'];
   
}
