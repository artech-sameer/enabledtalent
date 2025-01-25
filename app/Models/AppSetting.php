<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{

	public function siteLogo(){
        return $this->hasOne(Media::class,'id','logo');
    }

    public function footerLogo(){
        return $this->hasOne(Media::class,'id','footer_logo');
    }

    public function siteFavicon(){
        return $this->hasOne(Media::class,'id','favicon');
    }
   
}
