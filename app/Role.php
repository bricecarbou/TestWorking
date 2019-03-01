<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function traders()
    {
        return $this->hasMany(Trader::class);
    }
}
