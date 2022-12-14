<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VehicleModel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'establishment_year'];

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
