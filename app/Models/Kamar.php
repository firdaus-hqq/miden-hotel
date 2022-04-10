<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fasilitasKamar() {
        return $this->hasMany(FasilitasKamar::class);
    }

    public function form() {
        return $this->hasMany(Form::class);
    }
    public $table = "kamar";
}
