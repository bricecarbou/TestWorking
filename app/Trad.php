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
		->pluck('trader_id');
		
		return Trader::find($a);
		
	}

}

//Vue -> ajouter un bouton pour supprimer <a href="/trad/55">Supprimer</a>
//creer une route pour recevoir (passer en réference le trade que tu trade à supprimer) ->Route::get('/trad/{trad}', controller@method)
// creer la fonction delete dans le controller de trad delete(Trad $trad)
// method 
//$trad = Trad::find($trad); pas besoin si eaggerloading
//$trad->delete();