<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{    protected $fillable = ['name', 'country_id'];

    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
