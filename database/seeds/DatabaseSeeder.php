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
        App\Card::create(['CardName'=>'Royal Recruits', 'id'=>'26000047', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/royal_recruits.png']);
        App\Card::create(['CardName'=>'Royal Giant', 'id'=>'26000024', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/royal_giant.png']);
        App\Card::create(['CardName'=>'Elite Barbarians', 'id'=>'26000043', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/angry_barbarian.png']);
        App\Card::create(['CardName'=>'Barbarians', 'id'=>'26000008', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/barbarians.png']);
        App\Card::create(['CardName'=>'Minion Horde', 'id'=>'26000022', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/minion_horde.png']);
        App\Card::create(['CardName'=>'Rascal', 'id'=>'26000053', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rascals.png']);
        App\Card::create(['CardName'=>'Knight', 'id'=>'26000000', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/knight.png']);
        App\Card::create(['CardName'=>'Archers', 'id'=>'26000001', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/archers.png']);
        App\Card::create(['CardName'=>'Minions', 'id'=>'26000005', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/minion.png']);
        App\Card::create(['CardName'=>'Bomber', 'id'=>'26000013', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bomber.png']);
        App\Card::create(['CardName'=>'Goblin Gang', 'id'=>'26000041', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_gang.png']);
        App\Card::create(['CardName'=>'Skeleton Barrel', 'id'=>'26000056', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeleton_balloon.png']);
        App\Card::create(['CardName'=>'Goblins', 'id'=>'26000002', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblins.png']);
        App\Card::create(['CardName'=>'Spear Goblins', 'id'=>'26000019', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_archer.png']);
        App\Card::create(['CardName'=>'Fire Spirits', 'id'=>'26000031', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_spirits.png']);
        App\Card::create(['CardName'=>'Bats', 'id'=>'26000049', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bats.png']);
        App\Card::create(['CardName'=>'Skeletons', 'id'=>'26000010', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeletons.png']);
        App\Card::create(['CardName'=>'Ice Spirit', 'id'=>'26000030', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/snow_spirits.png']);
        App\Card::create(['CardName'=>'Mortar', 'id'=>'27000002', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_mortar.png']);
        App\Card::create(['CardName'=>'Tesla', 'id'=>'27000006', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_tesla.png']);
        App\Card::create(['CardName'=>'Cannon', 'id'=>'27000000', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chaos_cannon.png']);
        App\Card::create(['CardName'=>'Arrows', 'id'=>'28000001', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/order_volley.png']);
        App\Card::create(['CardName'=>'Zap', 'id'=>'28000008', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/zap.png']);
        App\Card::create(['CardName'=>'Giant Snowball', 'id'=>'28000017', 'card_type_id'=>$common->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/snowball.png']);

        // Card Rare

        App\Card::create(['CardName'=>'Three Musketeers', 'id'=>'26000028', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/three_musketeers.png']);
        App\Card::create(['CardName'=>'Giant', 'id'=>'26000003', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/giant.png']);
        App\Card::create(['CardName'=>'Royal Hogs', 'id'=>'26000059', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/royal_hog.png']);
        App\Card::create(['CardName'=>'Valkyrie', 'id'=>'26000011', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/valkyrie.png']);
        App\Card::create(['CardName'=>'Musketeer', 'id'=>'26000014', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/musketeer.png']);
        App\Card::create(['CardName'=>'Mini P.E.K.K.A', 'id'=>'26000018', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mini_pekka.png']);
        App\Card::create(['CardName'=>'Hog Rider', 'id'=>'26000021', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/hog_rider.png']);
        App\Card::create(['CardName'=>'Battle Ram', 'id'=>'26000036', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/battle_ram.png']);
        App\Card::create(['CardName'=>'Flying Machine', 'id'=>'26000057', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/flying_machine.png']);
        App\Card::create(['CardName'=>'Zappies', 'id'=>'26000052', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/zappies.png']);
        App\Card::create(['CardName'=>'Mega Minion', 'id'=>'26000039', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mega_minion.png']);
        App\Card::create(['CardName'=>'Dart Goblin', 'id'=>'26000040', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/blowdart_goblin.png']);
        App\Card::create(['CardName'=>'Ice Golem', 'id'=>'26000038', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ice_golem.png']);
        App\Card::create(['CardName'=>'Barbarian Hut', 'id'=>'27000005', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/barbarian_hut.png']);
        App\Card::create(['CardName'=>'Elixir Collector', 'id'=>'27000007', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_elixir_collector.png']);
        App\Card::create(['CardName'=>'Goblin Hut', 'id'=>'27000001', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_furnace.png']);
        App\Card::create(['CardName'=>'Inferno Tower', 'id'=>'27000003', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_inferno.png']);
        App\Card::create(['CardName'=>'BombTower', 'id'=>'27000004', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bomb_tower.png']);
        App\Card::create(['CardName'=>'Furnace', 'id'=>'27000010', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/firespirit_hut.png']);
        App\Card::create(['CardName'=>'Tombstone', 'id'=>'27000009', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/tombstone.png']);
        App\Card::create(['CardName'=>'Rocket', 'id'=>'28000003', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rocket.png']);
        App\Card::create(['CardName'=>'Fireball', 'id'=>'28000000', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/fire_fireball.png']);
        App\Card::create(['CardName'=>'Heal', 'id'=>'28000016', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/heal.png']);
        App\Card::create(['CardName'=>'Wizard', 'id'=>'26000017', 'card_type_id'=>$Rare->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/wizard.png']);

        // Card Epic

        App\Card::create(['CardName'=>'Golem', 'id'=>'26000009', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chr_golem.png']);
        App\Card::create(['CardName'=>'P.E.K.K.A', 'id'=>'26000004', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/pekka.png']);
        App\Card::create(['CardName'=>'Giant Skeleton', 'id'=>'26000020', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/giant_skeleton.png']);
        App\Card::create(['CardName'=>'Goblin Giant', 'id'=>'26000060', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_giant.png']);
        App\Card::create(['CardName'=>'Baloon', 'id'=>'26000006', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chr_balloon.png']);
        App\Card::create(['CardName'=>'Witch', 'id'=>'26000007', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/chr_witch.png']);
        App\Card::create(['CardName'=>'Prince', 'id'=>'26000016', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/prince.png']);
        App\Card::create(['CardName'=>'Bowler', 'id'=>'26000034', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bowler.png']);
        App\Card::create(['CardName'=>'Executioner', 'id'=>'26000045', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/executioner.png']);
        App\Card::create(['CardName'=>'Cannon Cart', 'id'=>'26000054', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/cannon_cart.png']);
        App\Card::create(['CardName'=>'Electro Dragon', 'id'=>'26000063', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/electro_dragon.png']);
        App\Card::create(['CardName'=>'Baby Dragon', 'id'=>'26000015', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/baby_dragon.png']);
        App\Card::create(['CardName'=>'Dark Prince', 'id'=>'26000027', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/dark_prince.png']);
        App\Card::create(['CardName'=>'Hunter', 'id'=>'26000044', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/hunter.png']);
        App\Card::create(['CardName'=>'Skeleton Army', 'id'=>'26000012', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeleton_horde.png']);
        App\Card::create(['CardName'=>'Guards', 'id'=>'26000025', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/skeleton_warriors.png']);
        App\Card::create(['CardName'=>'X-Bow', 'id'=>'27000008', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/building_xbow.png']);
        App\Card::create(['CardName'=>'Lightning', 'id'=>'28000007', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/lightning.png']);
        App\Card::create(['CardName'=>'Freeze', 'id'=>'28000005', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/freeze.png']);
        App\Card::create(['CardName'=>'Poison', 'id'=>'28000009', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/poison.png']);
        App\Card::create(['CardName'=>'Goblin Barrel', 'id'=>'28000004', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/goblin_barrel.png']);
        App\Card::create(['CardName'=>'Tornado', 'id'=>'28000012', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/tornado.png']);
        App\Card::create(['CardName'=>'Clone', 'id'=>'28000013', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/copy.png']);
        App\Card::create(['CardName'=>'Rage', 'id'=>'28000002', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rage.png']);
        App\Card::create(['CardName'=>'Barbarian Barrel', 'id'=>'28000015', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/barb_barrel.png']);
        App\Card::create(['CardName'=>'Mirror', 'id'=>'28000006', 'card_type_id'=>$epic->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mirror.png']);

        // Card Legendary

        App\Card::create(['CardName'=>'Lava Hound', 'id'=>'26000029', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/lava_hound.png']);
        App\Card::create(['CardName'=>'Mega Knight', 'id'=>'26000055', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/mega_knight.png']);
        App\Card::create(['CardName'=>'Sparky', 'id'=>'26000033', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/zapMachine.png']);
        App\Card::create(['CardName'=>'Lumberjack', 'id'=>'26000035', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/rage_barbarian.png']);
        App\Card::create(['CardName'=>'Inferno Dragon', 'id'=>'26000037', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/inferno_dragon.png']);
        App\Card::create(['CardName'=>'Electro Wizard', 'id'=>'26000042', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/electro_wizard.png']);
        App\Card::create(['CardName'=>'Night Witch', 'id'=>'26000048', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/dark_witch.png']);
        App\Card::create(['CardName'=>'Magic Archer', 'id'=>'26000062', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/magic_archer.png']);
        App\Card::create(['CardName'=>'Ice Wizard', 'id'=>'26000023', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ice_wizard.png']);
        App\Card::create(['CardName'=>'Princess', 'id'=>'26000026', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/princess.png']);
        App\Card::create(['CardName'=>'Miner', 'id'=>'26000032', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/miner.png']);
        App\Card::create(['CardName'=>'Bandit', 'id'=>'26000046', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/bandit.png']);
        App\Card::create(['CardName'=>'Royal Ghost', 'id'=>'26000050', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ghost.png']);
        App\Card::create(['CardName'=>'Graveyard', 'id'=>'28000010', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/graveyard.png']);
        App\Card::create(['CardName'=>'The Log', 'id'=>'28000011', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/the_log.png']);
        

        // admin
        DB::table('traders')->insert(['nick'=>'admin', 'cr_key'=>'0000', 'clan'=>'GEFR', 'password'=>bcrypt('Karolyn'), 'id'=>'1']);
        
        //users
        DB::table('traders')->insert(['nick'=>'Bryyyce2', 'cr_key'=>'802UYJP8', 'clan'=>'GE2', 'password'=>bcrypt('toto'), 'id'=>'2']);
        DB::table('traders')->insert(['nick'=>'Test', 'cr_key'=>'802UYJP8', 'clan'=>'GE2', 'password'=>bcrypt('toto'), 'id'=>'3']);
       
    }   
}
