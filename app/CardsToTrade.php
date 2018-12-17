<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardsToTrade extends Model
{

  /* Relation Many to many entre une carte et un trade */
  public function CardTrad()
  {
    return $this->belongsToMany(Card::class);
  }

}
