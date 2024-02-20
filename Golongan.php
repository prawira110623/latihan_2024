<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = "tb_golongan ";
    public $timestamps = false;
    public function Karyawan(){
        return $this->hasMany(Karyawan::class, 'id_golongan','id_golongan');
    }
}
