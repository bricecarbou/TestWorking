<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use App\Clan;


class Trader extends Model implements Authenticatable 
{

  use BasicAuthenticatable;

  public function clan()
  {
    return $this->belongsTo(Clan::class);
  }

}
