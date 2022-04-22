<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kamars()
    {
        // return $this->belongsTo(Kamar::class, );
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }

    public $table = 'fasilitas_kamar';
}
