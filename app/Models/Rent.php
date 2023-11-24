<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public $fillable = [
        'rent',
    ];
    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
