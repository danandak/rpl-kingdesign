<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    protected $table = 't_pesanan';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jasa() {
        return $this->belongsTo(Jasa::class);
    }
    
    public function status() {
        return $this->belongsTo(Status::class);
    }
    
}
