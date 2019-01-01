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
	public function getMatchTrads()
	{

		//recupérons la liste des trader proposant la carte que l'on recherche, plus la carte qu'ils recherchent
		$a = Trad::whereHas('cards', function($query){
			return $query->where('card_id', $this->card->id);
		})
		->get();
	
		$trads = array();

		// verifions que nous donnons bien la carte que 
		// les traders rrecherchent
		foreach($a as $possibleTrad)
		{
			foreach ($this->cards as $card)
			{
				if ( $card->id  == $possibleTrad->card_id)
				{
					$trads[] = $possibleTrad;
				}
			}
		}

		return $trads;
	}

	public static function updateAll()
	{

		/* Delete the old trad */
		// \App\Trad::deleteOldTrads();
				
		/* update of the trads */
		$trads = \App\Trad::all();

		foreach ($trads as $trad) 
		{
			
			$trader = \App\Trader::find($trad->trader_id);
			$cardsTrader = \App\Trader::RecoverTraderCards($trader->cr_key);
			$cardsToTrade = array();

			foreach ($cardsTrader as $cardTrader) 
			{
				if (($cardTrader[3] === "Common") and (($cardTrader[2] >= '250') or ($cardTrader[4] > '12'))) {
					$cardsToTrade[] = \App\Card::find($cardTrader[0]);
				}
				if (($cardTrader[3] === "Rare") and (($cardTrader[2] >= '50') or ($cardTrader[4] > '10'))) {
					$cardsToTrade[] = \App\Card::find($cardTrader[0]);
				}
				if (($cardTrader[3] === "Epic") and (($cardTrader[2] >= '10')or ($cardTrader[4] > '7'))) {
					$cardsToTrade[] = \App\Card::find($cardTrader[0]);
				}
				if (($cardTrader[3] === "Legendary") and (((($cardTrader[2] >= '1') and ($cardTrader[4] > '1')) or ($cardTrader[2] >= '2') and ($cardTrader[4] > '0')) or ($cardTrader[4] > '4'))) {
					$cardsToTrade[] = \App\Card::find($cardTrader[0]);
				}
			}

			foreach ($trad->cards as $card) 
			{
				$keep = false;
				$card_id = $card->id;

				if(($trader->id ===2) AND ($card_id === 26000048))
				{
					dump("nightwitch");
				}

				foreach ($cardsToTrade as $cardToTrade) 
				{
					if(!($cardToTrade === null))
					{
						if ($card_id === $cardToTrade->id) 
						{
							$keep = true;
							break;
						}
					}
				}

				if($trader->id ===2)
				{
					dump($keep);
				}

				if($keep === false)
				{
					$trad->cards()->detach($card_id);
				}
			}

			if ($trad->cards->isEmpty())
			{
				Trad::find($trad->id)->delete();
			}
		}

		if($trader->id ===2)
		{
			dd($cardsToTrade);
		}
	}


	public static function deleteOldTrads()
	{

		/* update of the old trads */
		$trads = \App\Trad::all();
		$today = time();

		//20 jours en seconde
		$limit_date = 1728000;
		foreach ($trads as $trad) 
		{
			if ((strtotime($trad->created_at) + $limit_date) < $today)
			{
				$trad->delete();
			}
		}
	}
}