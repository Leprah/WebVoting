<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $table = "voting";
    protected $fillable = ['kandidat_id','user_id','status'];
}
