<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "tb_karyawan";
    protected $primaryKey = "nik";
    protected $fillable = ['nik','nama','jenis_kelamin','tgl_lahir','id_jabatan','id_golongan'];
    public $timestamps = false;
}
