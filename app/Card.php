<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['CardName', 'TypeId','CardImagePath'];
    
	public function trades()
	{
		return $this->belongsToMany(Trad::class, 'trade_has_cards');
	}

}
