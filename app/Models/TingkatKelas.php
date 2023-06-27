<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatKelas extends Model
{
    use HasFactory;
    public $table = "tingkatKelas";

    public function kelas()
    {
        return $this->hasMany(kelas::class);
    }
}
