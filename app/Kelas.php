<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['kelas','id'];
    public $timestamps = true;

    public function siswa() {
        return $this->hasMany('App\Siswa','id_kelas');
    }

}
