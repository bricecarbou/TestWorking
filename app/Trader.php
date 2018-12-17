<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use App\Clan;


class Trader extends Model implements Authenticatable
{
  protected $fillable = ['nick', 'password'];

  use BasicAuthenticatable;

  public function clan()
  {
    return $this->belongsTo(Clan::class);
  }

  public function CardsFind()
  {
    return $this->hasMany(CardToFind::class);
  }

  public function CardsTrade()
  {
    return $this->hasMany(CardToTrade::class);
  }

  // We don't use token
  public function getRememberTokenName()
  {
    return '';
  }

}
