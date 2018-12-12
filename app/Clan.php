<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Trader;

class Clan extends Model
{
    public function traders()
    {
      return $this->hasMany(Trader::class);
    }
}
