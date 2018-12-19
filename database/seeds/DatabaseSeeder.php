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
        $legendary = App\CardType::create(['name'=>'Legendary']);
        $epic = App\CardType::create(['name'=>'Epic']);
        $Rare = App\CardType::create(['name'=>'Rare']);
        $common = App\CardType::create(['name'=>'Common']);

        // Card Common
        App\Card::create(['CardName'=>'Royal Recruits', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/royal_recruits.png']);
        App\Card::create(['CardName'=>'Royal Giant', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/royal_giant.png']);
        App\Card::create(['CardName'=>'Elite Barbarians', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/angry_barbarian.png']);
        App\Card::create(['CardName'=>'Barbarians','card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/barbarians.png']);
        App\Card::create(['CardName'=>'Minion Horde', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/minion_horde.png']);
        App\Card::create(['CardName'=>'Rascal', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rascals.png']);
        App\Card::create(['CardName'=>'Knight', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/knight.png']);
        App\Card::create(['CardName'=>'Archers','card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/archers.png']);
        App\Card::create(['CardName'=>'Minions', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/minion.png']);
        App\Card::create(['CardName'=>'Bomber', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bomber.png']);
        App\Card::create(['CardName'=>'Goblin Gang', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_gang.png']);
        App\Card::create(['CardName'=>'Skeleton Barrel','card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeleton_balloon.png']);
        App\Card::create(['CardName'=>'Goblins', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblins.png']);
        App\Card::create(['CardName'=>'Spear Goblins', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_archer.png']);
        App\Card::create(['CardName'=>'Fire Spirits', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_spirits.png']);
        App\Card::create(['CardName'=>'Bats','card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bats.png']);
        App\Card::create(['CardName'=>'Skeletons', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeletons.png']);
        App\Card::create(['CardName'=>'Ice Spirit', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/snow_spirits.png']);
        App\Card::create(['CardName'=>'Mortar', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_mortar.png']);
        App\Card::create(['CardName'=>'Tesla','card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_tesla.png']);
        App\Card::create(['CardName'=>'Cannon', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chaos_cannon.png']);
        App\Card::create(['CardName'=>'Arrows', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/order_volley.png']);
        App\Card::create(['CardName'=>'Zap', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/zap.png']);
        App\Card::create(['CardName'=>'Giant Snowball','card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/snowball.png']);

        // Card Rare

        App\Card::create(['CardName'=>'Three Musketeers', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/three_musketeers.png']);
        App\Card::create(['CardName'=>'Giant', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/giant.png']);
        App\Card::create(['CardName'=>'Royal Hogs', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/royal_hog.png']);
        App\Card::create(['CardName'=>'Valkyrie','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/valkyrie.png']);
        App\Card::create(['CardName'=>'Musketeer','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/musketeer.png']);
        App\Card::create(['CardName'=>'Mini P.E.K.K.A', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mini_pekka.png']);
        App\Card::create(['CardName'=>'Hog Rider', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/hog_rider.png']);
        App\Card::create(['CardName'=>'Battle Ram', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/battle_ram.png']);
        App\Card::create(['CardName'=>'Flying Machine','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/flying_machine.png']);
        App\Card::create(['CardName'=>'Zappies','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/zappies.png']);
        App\Card::create(['CardName'=>'Mega Minion', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mega_minion.png']);
        App\Card::create(['CardName'=>'Dart Goblin', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/blowdart_goblin.png']);
        App\Card::create(['CardName'=>'Ice Golem', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ice_golem.png']);
        App\Card::create(['CardName'=>'Barbarian Hut','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/barbarian_hut.png']);
        App\Card::create(['CardName'=>'Elixir Collector','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_elixir_collector.png']);
        App\Card::create(['CardName'=>'Goblin Hut', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_furnace.png']);
        App\Card::create(['CardName'=>'Inferno Tower','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_inferno.png']);
        App\Card::create(['CardName'=>'BombTower','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bomb_tower.png']);
        App\Card::create(['CardName'=>'Furnace', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/firespirit_hut.png']);
        App\Card::create(['CardName'=>'Tombstone', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/tombstone.png']);
        App\Card::create(['CardName'=>'Rocket', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rocket.png']);
        App\Card::create(['CardName'=>'Fireball','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_fireball.png']);
        App\Card::create(['CardName'=>'Heal','card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/heal.png']);

        // Card Epic

        App\Card::create(['CardName'=>'Golem', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chr_golem.png']);
        App\Card::create(['CardName'=>'P.E.K.K.A', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/pekka.png']);
        App\Card::create(['CardName'=>'Giant Skeleton', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/giant_skeleton.png']);
        App\Card::create(['CardName'=>'Goblin Giant','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_giant.png']);
        App\Card::create(['CardName'=>'Baloon','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chr_balloon.png']);
        App\Card::create(['CardName'=>'Witch', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chr_witch.png']);
        App\Card::create(['CardName'=>'Prince', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/prince.png']);
        App\Card::create(['CardName'=>'Bowler', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bowler.png']);
        App\Card::create(['CardName'=>'Executioner','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/executioner.png']);
        App\Card::create(['CardName'=>'Cannon Cart', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/cannon_cart.png']);
        App\Card::create(['CardName'=>'Electro Dragon', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/electro_dragon.png']);
        App\Card::create(['CardName'=>'Baby Dragon', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/baby_dragon.png']);
        App\Card::create(['CardName'=>'Dark Prince','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/dark_prince.png']);
        App\Card::create(['CardName'=>'Hunter','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/hunter.png']);
        App\Card::create(['CardName'=>'Skeleton Army', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeleton_horde.png']);
        App\Card::create(['CardName'=>'Guards', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeleton_warriors.png']);
        App\Card::create(['CardName'=>'X-Bow', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_xbow.png']);
        App\Card::create(['CardName'=>'Lightning','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/lightning.png']);
        App\Card::create(['CardName'=>'Freeze', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/freeze.png']);
        App\Card::create(['CardName'=>'Poison', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/poison.png']);
        App\Card::create(['CardName'=>'Goblin Barrel','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_barrel.png']);
        App\Card::create(['CardName'=>'Tornado','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/tornado.png']);
        App\Card::create(['CardName'=>'Clone', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/copy.png']);
        App\Card::create(['CardName'=>'Rage', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rage.png']);
        App\Card::create(['CardName'=>'Barbarian Barrel', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/barb_barrel.png']);
        App\Card::create(['CardName'=>'Mirror','card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mirror.png']);

        // Card Legendary

        App\Card::create(['CardName'=>'Lava Hound', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/lava_hound.png']);
        App\Card::create(['CardName'=>'Mega Knight', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mega_knight.png']);
        App\Card::create(['CardName'=>'Sparky', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/zapMachine.png']);
        App\Card::create(['CardName'=>'Lumberjack','card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rage_barbarian.png']);
        App\Card::create(['CardName'=>'Inferno Dragon','card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/inferno_dragon.png']);
        App\Card::create(['CardName'=>'Electro Wizard', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/electro_wizard.png']);
        App\Card::create(['CardName'=>'Night Witch', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/dark_witch.png']);
        App\Card::create(['CardName'=>'Magic Archer', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/magic_archer.png']);
        App\Card::create(['CardName'=>'Ice Wizard','card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ice_wizard.png']);
        App\Card::create(['CardName'=>'Princess','card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/princess.png']);
        App\Card::create(['CardName'=>'Miner', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/miner.png']);
        App\Card::create(['CardName'=>'Bandit', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bandit.png']);
        App\Card::create(['CardName'=>'Royal Ghost', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ghost.png']);
        App\Card::create(['CardName'=>'Graveyard','card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/graveyard.png']);
        App\Card::create(['CardName'=>'The Log','card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/the_log.png']);
        

        // admin
        DB::table('traders')->insert(['nick'=>'admin', 'clan'=>'GEFR', 'password'=>bcrypt('Karolyn'), 'id'=>'1']);
        
        //users
        DB::table('traders')->insert(['nick'=>'Bryyyce2', 'clan'=>'GE2', 'password'=>bcrypt('toto'), 'id'=>'2']);
        DB::table('traders')->insert(['nick'=>'Test', 'clan'=>'GE2', 'password'=>bcrypt('toto'), 'id'=>'3']);
       
    }   
}
