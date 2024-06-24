<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function keluars()
    {
        return $this->hasMany(BarangKeluar::class);
    }
}
