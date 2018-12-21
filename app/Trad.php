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

	public static function countTrads()
    {
        return Trad::count();
    }   

	// liste des trade dont la carte recherche appartient à la liste des cartes à échanger
	public function getMatchTraders()
	{

		//recupérons la liste des trader proposant la carte que l'on recherche, plus la carte qu'ils recherchent
		$a = Trad::whereHas('cards', function($query){
			return $query->where('card_id', $this->card->id);
		})
		->select('trader_id', 'card_id')->get();
	
		$trader_id = array();

		// verifions que nous donnons bien la carte que 
		// les traders rrecherchent
		foreach($a as $possibleTrad)
		{
			foreach ($this->cards as $card)
			{
				if ( $card->id  == $possibleTrad->card_id)
				{
					$trader_id[] = $possibleTrad->trader_id;
				}
			}
		}

		return Trader::find($trader_id);
	}
}