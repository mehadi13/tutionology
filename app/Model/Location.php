<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    protected $fillable = [
        'name','city_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function tution_infos()
    {
        return $this->hasMany(TutionInfo::class);
    }
}
