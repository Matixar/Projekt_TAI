<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roulete extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
