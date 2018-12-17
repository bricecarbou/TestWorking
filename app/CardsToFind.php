<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardsToFind extends Model
{

  /* Relation Many to many entre une carte et une recherche */
  public function Card()
  {
    return $this->belongsToMany(Card::class);
  }

  /* Relation one to many entre une recherche et un trader */

}
