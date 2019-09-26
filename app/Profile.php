<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded= [];

    public function imageProfile(){
        $imagePath = ($this->image) ? $this->image :"/profile/E8ALWWadbQpdGtc4Ks1bhAr5bou75l4oRSG1epjj.png";
        return "/storage/". $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
