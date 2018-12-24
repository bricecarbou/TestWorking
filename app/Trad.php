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

	public static function updateAll()
	{

		/* update of the trads */
		$traders = \App\Trader::all();

        foreach ($traders as $trader) {

			if(!($trader->nick === 'admin'))
			{
				$cardsTrader = \App\Trader::RecoverTraderCards($trader->cr_key);

				foreach ($cardsTrader as $cardTrader) 
				{
				if (!($cardTrader[0] === 26000032))
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
				}

				$trads = $trader->trads()->get();

				if(!($trads ===  null))
				{
					foreach ($trads as $trad) 
					{
						foreach ($trad->cards as $card) 
						{
							$keep = false;
							$card_id = $card->id;

							foreach ($cardsToTrade as $cardToTrade) {
								if ($card_id === $cardToTrade->id) {
									$keep = true;
									break;
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
		}
	}
}