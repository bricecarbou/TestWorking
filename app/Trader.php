<?php

namespace App;

ini_set('max_execution_time', 3000);

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

use CR\Api;
require '../vendor/autoload.php';

class Trader extends Model implements Authenticatable
{
    protected $fillable = ['nick', 'password'];

    use BasicAuthenticatable;

    public function Trads()
    {
        return $this->hasMany(Trad::class);
    }

    // We don't use token
    public function getRememberTokenName()
    {
        return '';
    }

    public static function countTraders()
    {
        return Trader::count();
    }   


    public static function RecoverTraderCards()
    {
        /* https://docs.royaleapi.com/#/ */
        /* https://packagist.org/packages/firegore2/clash-royale-php */ 

        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjA2MywiaWRlbiI6IjQzODY2MzgzODU2NTY2MjcyMSIsIm1kIjp7InVzZXJuYW1lIjoiQnJ5eXljZSIsImtleVZlcnNpb24iOjMsImRpc2NyaW1pbmF0b3IiOiI4NDcyIn0sInRzIjoxNTQ1MjE2NjU2NDE2fQ.OjyVcrLaVSXjHBMCys3FAesv_ZUH02ooTmqQVsM0AmU";
        $api = new Api($token, 600);
        $player  = $api->getPlayer([auth()->user()->cr_key]);

        $opts = [
          "http" => [
              "header" => "auth:" . $token
          ]
        ];

        $context = stream_context_create($opts);

        /*  Card object
        * @method    string              getName()                       Returns the name of the Card.
        * @method    string              getKey()                        Returns the key of the Card.
        * @method    int                 getLevel()                      (Optional) Returns the level of the Card.
        * @method    int                 getMaxLevel()                   Returns the max level of the Card.
        * @method    int                 getCount()                      (Optional) Returns the actual number of the Card.
        * @method    int                 getRequiredForUpgrade()         (Optional) Returns the total required number of cards in this level to upgrade the Card.
        * @method    int                 getLeftToUpgrade()              (Optional) Returns the remaining number of cards in this level to upgrade the Card.
        * @method    string              getIcon()                       Returns the url icon of the Card.
        * @method    int                 getElixir()                     Returns the elixir cost of the Card.
        * @method    string              getType()                       Returns the type of the Card.
        * @method    string              getRarity()                     Returns the rarity type of the Card.
        * @method    int                 getArena()                      Returns the arena level to unlock the Card.
        * @method    int                 getDescription()                Returns the description of the Card.
        * @method    int                 getId()                         Returns the id of the Card.
        *
        * @method    array               getConstant()                   Returns the Card object constants
        * @method    int                 getUpgradeCost()                Returns the cost to upgrade de card
        * @method    int                 getUpgradeExp()                 Returns the remaining experience when upgrade
        * @method    array               getUpgradeStats()               Returns the card stats
        */

        foreach ($player->getCards() as $card) {
            $cards_info[] = [
            $card->getId(),
            $card->getName(),
            $card->getCount(),
            $card->getRarity(),
            $card->getLevel()];
        }
        return ($cards_info);
    }
  }
