<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static select(string $string)
 * @method static paginate(int $int)
 */
class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'city',
        'standard',
        'monthly',
        'rent',
        'deposit',
        'commission',
        'image',
        'description',

    ];

}
