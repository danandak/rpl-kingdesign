<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'r_jasa';
    public $timestamps = false;

    public function pesanan() {
        return $this->hasMany(Pesanan::class);
    }
}
