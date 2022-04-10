<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kamar() {
        return $this->belongsTo(Kamar::class);
    }

    public $table = "form";
}
