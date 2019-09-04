<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brush extends Model
{
    //
    public function user() {
        return $this->hasOne("App\User");
    }
    public function toothbrush() {
        return $this->hasOne("App\ToothBrush");
    }
}
