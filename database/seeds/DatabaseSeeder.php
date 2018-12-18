<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Card
        App\Card::create(['CardName'=>'Boule de feu', 'TypeId'=>'R', 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_fireball.png' ,'id'=>'1']);
        App\Card::create(['CardName'=>'tour de l\'enfer', 'TypeId'=>'R', 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_inferno.png', 'id'=>'2']);
        App\Card::create(['CardName'=>'squelettes', 'TypeId'=>'C', 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeletons.png', 'id'=>'3']);
        App\Card::create(['CardName'=>'esprit de glace','TypeId'=>'C', 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/snow_spirits.png', 'id'=>'4']);
        App\Card::create(['CardName'=>'bébé dragon','TypeId'=>'E', 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/baby_dragon.png', 'id'=>'5']);

        // admin
        DB::table('traders')->insert(['nick'=>'admin', 'clan'=>'GEFR', 'password'=>bcrypt('Karolyn'), 'id'=>'1']);
        DB::table('traders')->insert(['nick'=>'Bryyyce2', 'clan'=>'GE2', 'password'=>bcrypt('toto'), 'id'=>'2']);
       
    }   
}
