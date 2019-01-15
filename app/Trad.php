<?php

namespace App;

use App\Filters\TradFilter;
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
	
	public static function countGroupTrads()
    {
		$a = Trad::whereHas('trader', function($query){
			return $query->whereHas('clan', function($querygroup){
				return $querygroup->where('group_id', auth()->user()->clan->group_id);
			});
		})->get();

		return $a->count();
    }  

	// liste des trade dont la carte recherche appartient à la liste des cartes à échanger
	public function getMatchTrads()
	{

 
		if (auth()->user()->role->name === 'admin') 
        {
			//recupérons la liste des trad proposant la carte que l'on recherche, plus la carte qu'ils recherchent, dans notre group de clan
			$clan = Clan::all();	
			
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
					if (( $card->id  == $possibleTrad->card_id) and ($possibleTrad->trader->clan->group_id == $this->trader->clan->group_id))
					{
						$trads[] = $possibleTrad;
					}
				}
			}

		} 
		else
		{
			//recupérons la liste des trad proposant la carte que l'on recherche, plus la carte qu'ils recherchent, dans notre group de clan
			$clan = Clan::find(auth()->user()->clan_id);

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
					if (( $card->id  == $possibleTrad->card_id) and ($possibleTrad->trader->clan->group_id == $clan->group_id))
					{
						$trads[] = $possibleTrad;
					}
				}
			}
		}


		return $trads;
	}

	public static function allTradsGroup()
    {
        if (auth()->user()->role->name === 'admin') 
        {
            $trads = \App\Trad::all();
        } 
        else 
        {
            $trads = \App\Trad::whereHas('trader', function ($query) {
				return $query->whereHas('clan', function($query_group){
					return $query_group->where('group_id', auth()->user()->clan->group_id);
				});
			})
			->get();
        }


        return $trads;
	}
	
	public static function updateAll()
	{

		/* Delete the old trad */
		\App\Trad::deleteOldTrads();
				
		/* update of the trads */
		$trads = \App\Trad::allTradsGroup();

		foreach ($trads as $trad) 
		{
			
			$trader = \App\Trader::find($trad->trader_id);
			$cardsTrader = \App\Trader::RecoverTraderCards($trader->cr_key);

			if (! ($cardsTrader === "error")) 
			{
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
					if( ($cardTrader[3] === "Legendary") AND (!($cardTrader[2] === false)) AND (((($cardTrader[2] >= '1') AND ($cardTrader[4] > '1')) OR ($cardTrader[2] >= '2') AND ($cardTrader[4] > '0')) OR ($cardTrader[4] > '4'))) {
						$cardsToTrade[] = \App\Card::find($cardTrader[0]);
					}
				}

				foreach ($trad->cards as $card) 
				{
					$keep = false;
					$card_id = $card->id;

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
		}
	}


	public static function deleteOldTrads()
	{

		/* update of the old trads */
		$trads = \App\Trad::allTradsGroup();
		$today = time();

		//20 jours en seconde
		$limit_date = 1296000;

		foreach ($trads as $trad) 
		{
			if ((strtotime($trad->created_at) + $limit_date) < $today)
			{
				$trad->delete();
			}
		}
	}

	public static function updateAllnoAuth()
	{

		/* Delete the old trad */
		\App\Trad::deleteOldTradsnoAuth();
				
		/* update of the trads */
		$trads = \App\Trad::all();

		foreach ($trads as $trad) 
		{
			
			$trader = \App\Trader::find($trad->trader_id);
			$cardsTrader = \App\Trader::RecoverTraderCards($trader->cr_key);

			if (! ($cardsTrader === "error")) 
			{
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
					if( ($cardTrader[3] === "Legendary") AND (!($cardTrader[2] === false)) AND (((($cardTrader[2] >= '1') AND ($cardTrader[4] > '1')) OR ($cardTrader[2] >= '2') AND ($cardTrader[4] > '0')) OR ($cardTrader[4] > '4'))) {
						$cardsToTrade[] = \App\Card::find($cardTrader[0]);
					}
				}

				foreach ($trad->cards as $card) 
				{
					$keep = false;
					$card_id = $card->id;

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
		}
	}

	public static function deleteOldTradsnoAuth()
	{

		/* update of the old trads */
		$trads = \App\Trad::all();
		$today = time();

		//20 jours en seconde
		$limit_date = 1296000;

		foreach ($trads as $trad) 
		{
			if ((strtotime($trad->created_at) + $limit_date) < $today)
			{
				$trad->delete();
			}
		}
	}


}