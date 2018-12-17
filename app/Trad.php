<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trad extends Model
{
      
	public function cards()
	{
		return $this->belongsToMany(Card::class, 'trade_has_cards');
	}

	public function card()
	{
		return $this->belongsTo(Card::class);
	}

}
