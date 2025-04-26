<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekammedis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'umur_pasien',
    ];

    protected $attributes = [
        'umur_pasien' => 0,
    ];

    public function pasien()
    {
        return $this->belongsTo(User::class);
    }
}
