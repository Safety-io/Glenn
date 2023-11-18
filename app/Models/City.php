<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $filable = [
        'name',
    ];

    public function houses()
    {
        return $this->belongsTo(House::class);
    }
}
