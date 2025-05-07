<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{

    protected $table = 'nilai';
    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class, 'idmk', 'idmk');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
