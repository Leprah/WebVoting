<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    protected $table = 'pemilih';
    protected $primaryKey = "id_pemilih";
    protected $fillable= ['nama','nim','jurusan','angkatan'];

    // public function voting()
    // {
    //     return $this->belongsTo('App\Voting');
    // }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}