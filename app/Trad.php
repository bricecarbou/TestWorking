<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trad extends Model
{
      
	public function cards()
	{
		return $this->belongsToMany(Card::class, 'trad_has_cards');
	}

	public function card()
	{
		return $this->belongsTo(Card::class);
	}

	public function trader()
	{
		return $this->belongsTo(Trader::class);
	}

	// liste des trade dont la carte recherche appartient à la liste des cartes à échanger
	public function getMatchTraders()
	{

		$a = Trad::whereHas('cards', function($query){
			return $query->where('card_id', $this->card->id);
		})
		->pluck('card_id');
		
		$trader_id = array();

		//dd($this->cards);
		foreach($a as $card_id)
		{
			foreach ($this->cards as $card)
			{
				if ( (int)$card_id  === $card->id )
				{
					
					$trader_id = Trad::whereHas('cards', function($query){
						return $query->where('card_id', $this->card->id);
					})
					->pluck('trader_id');

					//dd($trader_id);
				}
			}
		}
		//dd($trader_id);
		return Trader::find($trader_id);
		
	}

}