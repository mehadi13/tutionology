<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    //

    protected $fillable = [
        'name'
    ];

    public function tution_infos()
    {
        return $this->hasMany(TutionInfo::class);
    }
}
