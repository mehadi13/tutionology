<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $fillable = [
        'name'
    ];

    //
    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function tution_infos()
    {
        return $this->hasMany(TutionInfo::class);
    }

}
