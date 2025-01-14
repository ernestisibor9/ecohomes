<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellMyProperty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id' ,'id');
    }
    public function state(){
        return $this->belongsTo(State::class, 'state_id' ,'id');
    }

    public function type(){
        return $this->belongsTo(PropertyType::class, 'property_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
