<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static select(string $string)
 * @method static paginate(int $int)
 * @method static where(string $string, string $string1, string $string2)
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
        'house_statue'

    ];

    public function standard()
    {
        return $this->hasOne(Standard::class);
    }

    public function rent()
    {
        return $this->hasOne(Rent::class);
    }

    public function commission()
    {
        return $this->hasOne(Commission::class);
    }

    public function deposit()
    {
        return $this->hasOne(Deposit::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }
}
