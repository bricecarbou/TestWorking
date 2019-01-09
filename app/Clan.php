<?php

namespace App;

use App\Trader;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $fillable = ['name', 'group_id'];
    
    public function traders()
    {
        return $this->hasMany(Trader::class);
    }

    public function group()
    {
      return $this->belongsTo(ClanGroup::class);
    }

    public static function clanOfMyGroup()
    {
        if (auth()->user()->role->name === 'admin') 
        {
            return Clan::all();
        } 
        else 
        {
            return Clan::where('group_id', auth()->user()->clan->group_id)->orderBy('name', 'asc')->get();
        }
    }
}

