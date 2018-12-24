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

	public function updateAll()
	{

		/* update of the trads */
		$trads = Trad::all();
		$traders = \App\Trader::all();

		//$cardsTrader = \App\Trader::RecoverTraderCards();
	
		foreach($cardsTrader as $cardTrader)
		{

			if( ($cardTrader[3] === "Common") AND (($cardTrader[2] >= '250') OR ($cardTrader[4] > '12')))
			{
				$cardsToTrade[] = \App\Card::find($cardTrader[0]);
			}
			if( ($cardTrader[3] === "Rare") AND (($cardTrader[2] >= '50') OR ($cardTrader[4] > '10')))
			{
				$cardsToTrade[] = \App\Card::find($cardTrader[0]);
			}
			if( ($cardTrader[3] === "Epic") AND (($cardTrader[2] >= '10' )OR ($cardTrader[4] > '7')))
			{
				$cardsToTrade[] = \App\Card::find($cardTrader[0]);
			}
			if( ($cardTrader[3] === "Legendary") AND (((($cardTrader[2] >= '1') AND ($cardTrader[4] > '1')) OR ($cardTrader[2] >= '2') AND ($cardTrader[4] > '0')) OR ($cardTrader[4] > '4')))
			{
				$cardsToTrade[] = \App\Card::find($cardTrader[0]);
			}  
		}

		foreach($trads as $trad)
		{
			
			foreach($trad->cards as $card)
			{
				$keep = false;
				$card_id = $card->id;

				foreach($cardsToTrade as $cardToTrade)
				{

					if ($card_id === $cardToTrade->id) {
						$keep = true;
						break;
					}
				}

				/*if($keep === false)
				{
					$trad->find($card_id)->delete();
				}*/

			}
		}

	}
}