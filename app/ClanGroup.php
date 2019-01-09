<?php

namespace App;

use App\Card;
use Illuminate\Database\Eloquent\Model;

class ClanGroup extends Model
{
    protected $fillable = ['name'];

    public function clans()
    {
        return $this->hasMany(Clan::class);
    }
}
