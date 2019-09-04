<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToothBrush extends Model
{
    //
    public function user() {
        return $this->hasOne("App\User");
    }
    public function brushes() {
        return $this->hasMany("App\Brush");
    }
}
