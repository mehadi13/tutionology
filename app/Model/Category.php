<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
