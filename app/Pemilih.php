<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    protected $table = 'pemilih';
    protected $primaryKey = "id";
    protected $fillable= ['nama','nim','jurusan','angkatan'];
}
