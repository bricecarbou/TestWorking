<?php

namespace App;

use App\CardType;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['CardName', 'TypeId','CardImagePath'];
    
	public function trades()
	{
		return $this->belongsToMany(Trad::class, 'trade_has_cards');
	}

	public function type()
	{
		return $this->belongsTo(CardType::class);
	}

	public static function RecoverCardId($card_name)
    {
        /* https://docs.royaleapi.com/#/ */

        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjA2MywiaWRlbiI6IjQzODY2MzgzODU2NTY2MjcyMSIsIm1kIjp7InVzZXJuYW1lIjoiQnJ5eXljZSIsImtleVZlcnNpb24iOjMsImRpc2NyaW1pbmF0b3IiOiI4NDcyIn0sInRzIjoxNTQ1MjE2NjU2NDE2fQ.OjyVcrLaVSXjHBMCys3FAesv_ZUH02ooTmqQVsM0AmU";
		$opts = [
			"http" => [
				"header" => "auth:" . $token
			]
		];
		
		$context = stream_context_create($opts);

		$value= strstr(file_get_contents("https://api.royaleapi.com/constants?keys=cards",true, $context),$card_name);

		$start = strpos($value , '"id"');
		$card_id = substr($value, $start + 5, 8);

        return ($card_id);
    }
}
