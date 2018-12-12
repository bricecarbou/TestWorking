<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clan;


class Trader extends Model {
public function clan()
{
  return $this->belongsTo(Clan::class);
}
}
