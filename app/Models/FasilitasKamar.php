<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Kamar() {
        return $this->belongsTo(Kamar::class);
    }
    public $table = "fasilitas_kamar";
}