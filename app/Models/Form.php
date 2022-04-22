<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kamars()
    {
        // return $this->belongsTo(Kamar::class, );
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }

    public function scopeFilter($query, array $filters) {
        if(isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('nama_tamu', 'like', '%' . $filters['search'] . '%');
        }
    }

    public $table = "form";
}
