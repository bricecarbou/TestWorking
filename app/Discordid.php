<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Discordid extends Model
{
    protected $fillable = ['trader_id', 'discord_id'];
    
    public function trader()
    {
		return $this->belongsTo(Trader::class);
    }

}
