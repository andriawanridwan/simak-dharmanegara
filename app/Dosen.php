<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'tb_dosen';
    protected $primaryKey = 'nip';
    protected $guarded = [];

    public function prodi(){
        return $this->belongsTo('App\Prodi');
    }
}
