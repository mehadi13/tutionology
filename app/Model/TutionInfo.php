<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TutionInfo extends Model
{
    //
    /*protected $fillable = [
        'city_id','location_id','class_name_id','category_id','offer_salary',''
    ];*/
    protected $guarded = [];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
