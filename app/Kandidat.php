<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $table = 'kandidat';
    protected $primaryKey = "id";
    protected $fillable= ['nama','visi','misi','nim','jurusan','angkatan'];
   
}
