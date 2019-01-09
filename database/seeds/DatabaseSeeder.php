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
        App\Card::create(['CardName'=>'Ram Rider', 'id'=>'26000051', 'card_type_id'=>$legendary->id, 'CardImagePath' =>'https://cdn.statsroyale.com/images/cards/full/ram_rider.png']);
        

        
        $Admin = App\ClanGroup::create(['name'=>'Admin']);
        $GE = App\ClanGroup::create(['name'=>'Great Escape']);
        $admin = App\Clan::create(['name'=>'Admin', 'group_id'=>$Admin->id]);
        $GEFR = App\Clan::create(['name'=>'Great Escape FR', 'group_id'=>$GE->id]);
        $GE2 = App\Clan::create(['name'=>'Great Escape 2', 'group_id'=>$GE->id]);


        //role
        DB::table('roles')->insert(['id'=>1, 'name'=>'admin']);
        DB::table('roles')->insert(['id'=>2, 'name'=>'leader']);
        DB::table('roles')->insert(['id'=>3, 'name'=>'trader']);

   
        //users

         DB::table('traders')->insert([
          'id'          =>1,
          'nick'        =>'admin',
          'role_id'     => 1,
          'clan_id'     =>$Admin->id,
          'cr_key'      =>'0000',
          'discord_id' =>'000',
          'password'    =>'$2y$10$2..pxol/xk3AtWuVOX6VS.qFGNxbZa.UgKaSl98MqIkJFu3fmG0Oi',
          'created_at'  =>NULL,
          'updated_at'  =>NULL
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>2,
            'nick'        =>'Bryyyce2',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'802UYJP8',
            'discord_id' =>'438663838565662721',
            'password'    =>'$2y$10$.pDQqvYvCTffraCk/l0E9uZl0lIj4lPS02d6GN7iCwf6ZrqWtAOHe',
            'created_at'  =>NULL,
            'updated_at'  =>'2018-12-30 14:35:36'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>4,
            'nick'        =>'Burns 54',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'9UYQ9RCJ',
            'discord_id' =>'486510957275643906',
            'password'    =>'$2y$10$qUkbhjNLmluka3IUUed67OQAVep9VNLRZGwXW6IM1aVRb0SCV6wcm',
            'created_at'  =>'2018-12-20 13:11:28',
            'updated_at'  =>'2018-12-23 19:04:44'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>5,
            'nick'        =>'Dydy',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'2UCLPQJ2V',
            'discord_id' =>'405749657978011649',
            'password'    =>'$2y$10$ukRgyWdMO5GKDYFbrfbor.G7X/SjLG/1oGF78DJ.7hJSxYt8maRoC',
            'created_at'  =>'2018-12-20 13:11:58',
            'updated_at'  =>'2018-12-23 18:25:22'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>6,
            'nick'        =>'Albiorix',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2PYCGV2RR',
            'discord_id' =>'410432869857755146',
            'password'    =>'$2y$10$MzkptziiJgMVaotyqVSh/ODLr/EiASkniP2U1f6VjbEtrtNmYTM7u',
            'created_at'  =>'2018-12-20 13:18:23',
            'updated_at'  =>'2018-12-20 13:44:13'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>7,
            'nick'        =>'Mikey',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'2OCLOUYJL',
            'discord_id' =>'482815817675702292',
            'password'    =>'$2y$10$QXaHc9Iljwz.MeDxGsXlbe7LsNrPzaQebT58XdNQ6LffGlqPEozgC',
            'created_at'  =>'2018-12-20 13:23:35',
            'updated_at'  =>'2018-12-22 11:23:17'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>8,
            'nick'        =>'Dilhan_5720',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'88PPR909',
            'discord_id' =>'291283451766898695',
            'password'    =>'$2y$10$t9K0iOHwEQgpFJNY1bt/iOFRwDq0.QkEEI3iLbEZLiFq/05bb8thK',
            'created_at'  =>'2018-12-20 13:35:31',
            'updated_at'  =>'2018-12-21 12:42:59'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>9,
            'nick'        =>'Karolyn bis',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'9UCVRVQC9',
            'discord_id' =>'314466241991409664',
            'password'    =>'$2y$10$g8Grd0SDxCmWD1lMfgqSA.VAq.ZkQvD7LAp2uIYWjgWNpYxSZo1re',
            'created_at'  =>'2018-12-20 13:38:04',
            'updated_at'  =>'2019-01-03 19:58:25'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>11,
            'nick'        =>'SharKi',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'8VRCL8LQR',
            'discord_id' =>'451419433412460544',
            'password'    =>'$2y$10$gDyz/Q42iz1uTP/xJZ4bYOforvold96wnmAYQ8d/hZ1jQ6Xn2lqsG',
            'created_at'  =>'2018-12-20 15:38:41',
            'updated_at'  =>'2018-12-20 15:38:41'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>12,
            'nick'        =>'Zedd42',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'8RRPRQYLP',
            'discord_id' =>'499975916542361610',
            'password'    =>'$2y$10$sm5EUsj0AEMm4I7xVSmOHeUWalmf0Jfa56wzwaH2RActp10Buk9Ty',
            'created_at'  =>'2018-12-20 16:27:35',
            'updated_at'  =>'2018-12-22 09:41:20'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>13,
            'nick'        =>'Paco®️',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'PPQVJJLL',
            'discord_id' =>'424917692579971092',
            'password'    =>'$2y$10$pwQM7XicDEwiTTE9y3ZuK.y15NuDXTnB7YACW3XYV2Ooq9nDAf6vS',
            'created_at'  =>'2018-12-20 17:30:01',
            'updated_at'  =>'2018-12-21 12:38:00'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>14,
            'nick'        =>'Darkmanol',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'Gp98r0c',
            'discord_id' =>'410432869857755146',
            'password'    =>'$2y$10$/HHwz.pzCQTs2cnx045giu5IiHRMLLZBlPydcYOxSA0PCb8MXRWKW',
            'created_at'  =>'2018-12-20 17:46:46',
            'updated_at'  =>'2018-12-20 17:46:46'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>15,
            'nick'        =>'Damir',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'99G8RPRC9',
            'discord_id' =>'446047306643668994',
            'password'    =>'$2y$10$aKhnInoWERKxF5eY3jq4qOq4xmLiXuU9AC4NNUzERD3hxCR4VwOzi',
            'created_at'  =>'2018-12-20 17:51:04',
            'updated_at'  =>'2019-01-01 20:23:02'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>16,
            'nick'        =>'Rorome',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'28RJQVRC',
            'discord_id' =>'!411296397330087947',
            'password'    =>'$2y$10$pHjMM6/Ayt3YpnvnPjZRxen81mshtvQ9pt3yAqCjv/bZjHDo6skB2',
            'created_at'  =>'2018-12-20 18:12:03',
            'updated_at'  =>'2018-12-20 18:12:03'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>19,
            'nick'        =>'stofix',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'2ccq9g',
            'discord_id' =>'410432869857755146',
            'password'    =>'$2y$10$L1bbV0xDpOtD/7rvptPi7uFo.oNdhuQibgNJ2ojXy9rGPmYfaLGp.',
            'created_at'  =>'2018-12-20 19:22:40',
            'updated_at'  =>'2018-12-20 19:22:40'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>20,
            'nick'        =>'Karolyn',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'9U8UJLQG',
            'discord_id' =>'314466241991409664',
            'password'    =>'$2y$10$s1W3XnIJzMnKiVHzqYuzxecWU6y.ky4QNiOR9c0nukknRoUC93uae',
            'created_at'  =>'2018-12-20 19:39:53',
            'updated_at'  =>'2019-01-02 13:06:26'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>21,
            'nick'        =>'Adagio',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'Grljjr',
            'discord_id' =>'426075408287531015',
            'password'    =>'$2y$10$gsMf7tovnuBDQiKXMOkuxuY6xvCPJBsqtuj25zg1voZBHeqgVCFuy',
            'created_at'  =>'2018-12-20 20:21:49',
            'updated_at'  =>'2018-12-20 20:21:49'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>22,
            'nick'        =>'Capmax',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2QR0CY99',
            'discord_id' =>'313024238770716673',
            'password'    =>'$2y$10$d3uOQUpwxHYlmErCK6MluOHZsaAWrFfOekqXYyBcklx0Gn5jviNpO',
            'created_at'  =>'2018-12-20 23:41:56',
            'updated_at'  =>'2018-12-20 23:41:56'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>23,
            'nick'        =>'Nico',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2P0P88YJ',
            'discord_id' =>'000',
            'password'    =>'$2y$10$LissJvI18VjYvOb7GASrOuNuIzdyXcQLKLC8hrlYCjNockQXCVfGq',
            'created_at'  =>'2018-12-21 09:32:12',
            'updated_at'  =>'2018-12-21 09:32:12'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>24,
            'nick'        =>'Dark_PgM',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2GYVCCOL',
            'discord_id' =>'330024574307663884',
            'password'    =>'$2y$10$x.0LBl1JeWiIpAkcdhPC9ObRZRsTdIchVzfrqz5PF1g8FQk/eHmky',
            'created_at'  =>'2018-12-21 09:32:31',
            'updated_at'  =>'2018-12-21 09:32:31'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>25,
            'nick'        =>'Percepteur',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2VG8U9288',
            'discord_id' =>'000',
            'password'    =>'$2y$10$IoZ8qTWeYx49/bJG63sn.OC6JYemfkl5P5UL7Z7nQjEsi.NwRRgaS',
            'created_at'  =>'2018-12-21 10:46:25',
            'updated_at'  =>'2018-12-21 10:46:25'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>26,
            'nick'        =>'A7',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'8R9QVRC',
            'discord_id' =>'491657437926129666',
            'password'    =>'$2y$10$VKgcPwBU/RjJJM/IRCfyL.C5VtVf32eNTtfAdON.XwGOlaJukYA.S',
            'created_at'  =>'2018-12-21 10:47:07',
            'updated_at'  =>'2019-01-01 20:23:19'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>27,
            'nick'        =>'Hattilagula',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'89PY20RPY',
            'discord_id' =>'393978648522129408',
            'password'    =>'$2y$10$gYuCLXx2hDBbxnrLdUEGVuNbMZpBN0GrK76CbHd0JZRU6qTysXbcG',
            'created_at'  =>'2018-12-21 11:04:11',
            'updated_at'  =>'2018-12-21 11:04:11'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>28,
            'nick'        =>'Suzukman',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'P29JU28R',
            'discord_id' =>'000',
            'password'    =>'$2y$10$/EP7XuC2NX4XoC0eo.m08uc5evrQaoOyhu91aCQxQMJw9Rh53O5g.',
            'created_at'  =>'2018-12-21 11:15:09',
            'updated_at'  =>'2018-12-21 11:15:09'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>31,
            'nick'        =>'QueenPamy',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2CY2JJJ2Q',
            'discord_id' =>'422408481706999808',
            'password'    =>'$2y$10$YnlEn1Xi7Bx2mUoB9lUZCet3UQcSt6OcqpecAwJsn70CxNRzl7sZy',
            'created_at'  =>'2018-12-22 07:22:49',
            'updated_at'  =>'2018-12-22 07:22:49'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>32,
            'nick'        =>'APOPHIS',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2L22ULQJ9',
            'discord_id' =>'000',
            'password'    =>'$2y$10$X82fpNFFBbPoAFXgHaawL.HbRu98t3NdsYkm.Lraxym8OHqGTrHBS',
            'created_at'  =>'2018-12-22 07:31:12',
            'updated_at'  =>'2018-12-22 07:31:12'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>33,
            'nick'        =>'Micka❤️',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'82Y2RVVRU',
            'discord_id' =>'000',
            'password'    =>'$2y$10$73XXQf6AC/7PtRsipUS9Mejgd9hknQ.3szvtEuWpn92Qtu7WB2gsy',
            'created_at'  =>'2018-12-22 08:27:45',
            'updated_at'  =>'2018-12-22 08:27:45'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>34,
            'nick'        =>'Savius',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'288PCLLCP',
            'discord_id' =>'270678121429073920',
            'password'    =>'$2y$10$MmUrRc3R3jtxT4rqSW8Fg.M.lCN3nGfGIj18S0kcpZt7nvjKKiF2.',
            'created_at'  =>'2018-12-22 08:50:07',
            'updated_at'  =>'2018-12-30 14:54:04'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>35,
            'nick'        =>'Toad',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'2CGVCL2G9',
            'discord_id' =>'455827476518797323',
            'password'    =>'$2y$10$mbl8a9V2XPWqb8.XfRLgvOAJLd70mqefJHbojfyRTtPmednIBGTPy',
            'created_at'  =>'2018-12-22 11:23:04',
            'updated_at'  =>'2018-12-22 11:26:20'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>36,
            'nick'        =>'Neondu92',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'U8L2PUPY',
            'discord_id' =>'!441568017864982538',
            'password'    =>'$2y$10$FrX6JHAx3F4XGKxnhW8Lq.3Dtm2GXqzzQaApZSa5gyNG6swmiSuhy',
            'created_at'  =>'2018-12-22 21:05:22',
            'updated_at'  =>'2019-01-02 13:43:07'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>37,
            'nick'        =>'KingNano',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'Q9LPR9UR',
            'discord_id' =>'422410642482528267',
            'password'    =>'$2y$10$GBrX7lSei/PgsWlTEDSLxu1Bf25p6oDRR0NB40AR8Njtq6gpS6qfe',
            'created_at'  =>'2018-12-23 07:51:02',
            'updated_at'  =>'2018-12-23 07:51:02'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>38,
            'nick'        =>'Skodrill',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'9LC9PPPJ2',
            'discord_id' =>'422410642482528267',
            'password'    =>'$2y$10$M/AGXISj5lbTgW/GpsWTDOB2wgO45ob3PEUaWRpX0T8ZvJmBIXooa',
            'created_at'  =>'2018-12-23 07:57:20',
            'updated_at'  =>'2018-12-23 07:57:20'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>39,
            'nick'        =>'DarkPrincess',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'P0PGQLU8C',
            'discord_id' =>'422408481706999808',
            'password'    =>'$2y$10$tLqRF6U0PANpvantsUXc4OjzL/pcKEA1GITDETIv.W8iNjdE7c6/C',
            'created_at'  =>'2018-12-23 08:00:55',
            'updated_at'  =>'2018-12-23 08:00:55'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>40,
            'nick'        =>'Lucas',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'9CV89JGG',
            'discord_id' =>'347187375014805506',
            'password'    =>'$2y$10$HJKT8bT9VM7/8ENNzzd2puxx9S9WTXb40IXrRh9DU6gYQRY8Sid9u',
            'created_at'  =>'2018-12-23 12:32:34',
            'updated_at'  =>'2018-12-23 15:25:37'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>42,
            'nick'        =>'oKaM',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'QUQC0J9P',
            'discord_id' =>'423205089805729794',
            'password'    =>'$2y$10$816sjvYVVp6bZomHECccSuotIa4cm520VFWA3LzjrGhnMr9vdNTzi',
            'created_at'  =>'2018-12-24 07:16:32',
            'updated_at'  =>'2019-01-01 19:33:48'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>45,
            'nick'        =>'Brutebateau77',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'9J22QP880',
            'discord_id' =>'000',
            'password'    =>'$2y$10$lvzkiZuK20jZX8vhkm7PROwFXu5nekTg8smniaX.mpiUeRtunnnGu',
            'created_at'  =>'2018-12-25 01:47:58',
            'updated_at'  =>'2018-12-25 01:47:58'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>46,
            'nick'        =>'Largosien2.0',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'9LUG2UQ2L',
            'discord_id' =>'309735982297513985',
            'password'    =>'$2y$10$5ptLQ3XFycD.q8g4mJWsuuLw9TyLjjjasFsAWM4iCHts3s/OAyXuW',
            'created_at'  =>'2018-12-26 19:07:57',
            'updated_at'  =>'2018-12-26 19:07:57'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>47,
            'nick'        =>'Damir97v',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'99G8RPRC9',
            'discord_id' =>'446047306643668994',
            'password'    =>'$2y$10$jvEqnxJyeWkdS/VmAjSII.zJPXly0R.R1Y.EBw.RccWsOD2wyIAJK',
            'created_at'  =>'2018-12-27 12:03:27',
            'updated_at'  =>'2018-12-27 12:03:27'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>48,
            'nick'        =>'Farruco',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'PUYV22QY',
            'discord_id' =>'000',
            'password'    =>'$2y$10$3TPvCh/hSUFDHwsdh88OhehadK/vxy7PHnGbqOL0XKlDG1.S0QnrC',
            'created_at'  =>'2018-12-28 13:21:34',
            'updated_at'  =>'2018-12-28 13:21:34'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>49,
            'nick'        =>'Mohammed',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'8902PU8V',
            'discord_id' =>'298402739690536961',
            'password'    =>'$2y$10$FWb6xGNt/I7q2AMsTrnyp.evAZP/jc4/DSVukbI.bbQwOC3j.jFBy',
            'created_at'  =>'2018-12-29 11:03:30',
            'updated_at'  =>'2019-01-01 18:21:38'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>50,
            'nick'        =>'Dydy 2',
            'role_id'     => 3,
            'clan_id'     =>$GE2->id,
            'cr_key'      =>'PQL2QJUQU',
            'discord_id' =>'405749657978011649',
            'password'    =>'$2y$10$DxTxEA.fyzH9YjHquwjYFOu4CdfhFFnj7yAP.PcFHX5Dvezo4F1qa',
            'created_at'  =>'2018-12-30 09:19:56',
            'updated_at'  =>'2018-12-30 09:19:56'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>51,
            'nick'        =>'Filoupouj',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'Q8R0GC0R',
            'discord_id' =>'506148883672596494',
            'password'    =>'$2y$10$NnLDEiUJy9alr0SOlFo8x.PUieRMgI8Fp31TK.MxUxHSOzsMOka2e',
            'created_at'  =>'2018-12-30 12:56:26',
            'updated_at'  =>'2018-12-30 12:56:26'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>52,
            'nick'        =>'Robinator',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'8Y9UOGO',
            'discord_id' =>'529331369969713172',
            'password'    =>'$2y$10$mbazEvzG134uhkKG3MOWu.MVXQ5/v1JLLRCGtmMXMipv339IvczR.',
            'created_at'  =>'2019-01-02 12:09:16',
            'updated_at'  =>'2019-01-02 12:37:06'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>53,
            'nick'        =>'Hgj',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'YVR8U9QQ',
            'discord_id' =>'495982743830659102',
            'password'    =>'$2y$10$xjXz8Jkzo0zdXmmCCtPrY.24ZqthYGAoVD0MRDoL2YXfqhAwo8nee',
            'created_at'  =>'2019-01-02 12:26:46',
            'updated_at'  =>'2019-01-02 12:26:46'
            ] );
                        
             DB::table('traders')->insert( [
            'id'          =>54,
            'nick'        =>'Lepetitmaigre67',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'998V9YLL',
            'discord_id' =>'418860283520614422',
            'password'    =>'$2y$10$KWkthretPtVl2o4WvQ.KcuoXCyUD4eLQIYTOFxtNzlZjNMBKpO8GW',
            'created_at'  =>'2019-01-02 20:48:16',
            'updated_at'  =>'2019-01-06 16:40:34'
            ] );
                        
            DB::table('traders')->insert( [
            'id'          =>55,
            'nick'        =>'Lunear SxPhte ✌',
            'role_id'     => 3,
            'clan_id'     =>$GEFR->id,
            'cr_key'      =>'209VQ9JVQ',
            'discord_id' =>'318039962731806731',
            'password'    =>'$2y$10$SR26tNI5zFKrA3Atm8/npu92IIqov55QCGw4v1gyP/QJN1wI1/le2',
            'created_at'  =>'2019-01-03 22:08:53',
            'updated_at'  =>'2019-01-03 22:08:53'
            ] );       


        // Trads
            DB::table('trads')->insert( [
            'id'         =>231,
            'trader_id'  =>5,
            'card_id'    =>26000021,
            'created_at' =>'2018-12-24 14:53:20',
            'updated_at' =>'2018-12-24 14:53:20'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>232,
            'trader_id'  =>5,
            'card_id'    =>26000041,
            'created_at' =>'2018-12-24 16:00:45',
            'updated_at' =>'2018-12-24 16:00:45'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>239,
            'trader_id'  =>9,
            'card_id'    =>26000007,
            'created_at' =>'2018-12-26 06:55:29',
            'updated_at' =>'2018-12-26 06:55:29'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>252,
            'trader_id'  =>33,
            'card_id'    =>26000016,
            'created_at' =>'2018-12-26 10:46:30',
            'updated_at' =>'2018-12-26 10:46:30'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>260,
            'trader_id'  =>40,
            'card_id'    =>28000005,
            'created_at' =>'2018-12-26 13:00:01',
            'updated_at' =>'2018-12-26 13:00:01'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>262,
            'trader_id'  =>40,
            'card_id'    =>26000002,
            'created_at' =>'2018-12-26 13:01:23',
            'updated_at' =>'2018-12-26 13:01:23'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>267,
            'trader_id'  =>40,
            'card_id'    =>26000063,
            'created_at' =>'2018-12-27 09:40:38',
            'updated_at' =>'2018-12-27 09:40:38'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>334,
            'trader_id'  =>4,
            'card_id'    =>26000007,
            'created_at' =>'2018-12-28 09:44:38',
            'updated_at' =>'2018-12-28 09:44:38'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>335,
            'trader_id'  =>48,
            'card_id'    =>28000000,
            'created_at' =>'2018-12-28 13:24:02',
            'updated_at' =>'2018-12-28 13:24:02'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>339,
            'trader_id'  =>7,
            'card_id'    =>26000063,
            'created_at' =>'2018-12-28 16:45:41',
            'updated_at' =>'2018-12-28 16:45:41'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>347,
            'trader_id'  =>49,
            'card_id'    =>26000009,
            'created_at' =>'2018-12-29 11:07:56',
            'updated_at' =>'2018-12-29 11:07:56'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>400,
            'trader_id'  =>51,
            'card_id'    =>26000017,
            'created_at' =>'2018-12-31 07:38:18',
            'updated_at' =>'2018-12-31 07:38:18'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>412,
            'trader_id'  =>28,
            'card_id'    =>26000015,
            'created_at' =>'2018-12-31 10:26:54',
            'updated_at' =>'2018-12-31 10:26:54'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>422,
            'trader_id'  =>21,
            'card_id'    =>26000036,
            'created_at' =>'2018-12-31 15:49:57',
            'updated_at' =>'2018-12-31 15:49:57'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>426,
            'trader_id'  =>16,
            'card_id'    =>26000020,
            'created_at' =>'2018-12-31 16:06:50',
            'updated_at' =>'2018-12-31 16:06:50'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>427,
            'trader_id'  =>16,
            'card_id'    =>28000000,
            'created_at' =>'2018-12-31 16:07:21',
            'updated_at' =>'2018-12-31 16:07:21'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>428,
            'trader_id'  =>2,
            'card_id'    =>26000009,
            'created_at' =>'2019-01-01 10:50:38',
            'updated_at' =>'2019-01-01 10:50:38'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>457,
            'trader_id'  =>47,
            'card_id'    =>28000004,
            'created_at' =>'2019-01-03 11:11:14',
            'updated_at' =>'2019-01-03 11:11:14'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>467,
            'trader_id'  =>8,
            'card_id'    =>26000009,
            'created_at' =>'2019-01-04 14:05:22',
            'updated_at' =>'2019-01-04 14:05:22'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>468,
            'trader_id'  =>8,
            'card_id'    =>26000053,
            'created_at' =>'2019-01-04 14:05:57',
            'updated_at' =>'2019-01-04 14:05:57'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>475,
            'trader_id'  =>9,
            'card_id'    =>26000039,
            'created_at' =>'2019-01-05 21:15:19',
            'updated_at' =>'2019-01-05 21:15:19'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>478,
            'trader_id'  =>12,
            'card_id'    =>26000036,
            'created_at' =>'2019-01-06 09:14:27',
            'updated_at' =>'2019-01-06 09:14:27'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>479,
            'trader_id'  =>12,
            'card_id'    =>26000036,
            'created_at' =>'2019-01-06 09:15:08',
            'updated_at' =>'2019-01-06 09:15:08'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>484,
            'trader_id'  =>47,
            'card_id'    =>28000011,
            'created_at' =>'2019-01-07 06:47:03',
            'updated_at' =>'2019-01-07 06:47:03'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>486,
            'trader_id'  =>22,
            'card_id'    =>26000052,
            'created_at' =>'2019-01-07 08:20:12',
            'updated_at' =>'2019-01-07 08:20:12'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>487,
            'trader_id'  =>53,
            'card_id'    =>26000029,
            'created_at' =>'2019-01-07 10:21:32',
            'updated_at' =>'2019-01-07 10:21:32'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>488,
            'trader_id'  =>53,
            'card_id'    =>26000007,
            'created_at' =>'2019-01-07 10:22:17',
            'updated_at' =>'2019-01-07 10:22:17'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>489,
            'trader_id'  =>53,
            'card_id'    =>26000006,
            'created_at' =>'2019-01-07 10:22:40',
            'updated_at' =>'2019-01-07 10:22:40'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>490,
            'trader_id'  =>53,
            'card_id'    =>26000016,
            'created_at' =>'2019-01-07 10:23:11',
            'updated_at' =>'2019-01-07 10:23:11'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>491,
            'trader_id'  =>7,
            'card_id'    =>26000035,
            'created_at' =>'2019-01-07 14:40:26',
            'updated_at' =>'2019-01-07 14:40:26'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>493,
            'trader_id'  =>22,
            'card_id'    =>26000015,
            'created_at' =>'2019-01-07 20:53:09',
            'updated_at' =>'2019-01-07 20:53:09'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>494,
            'trader_id'  =>35,
            'card_id'    =>26000051,
            'created_at' =>'2019-01-07 20:53:56',
            'updated_at' =>'2019-01-07 20:53:56'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>495,
            'trader_id'  =>35,
            'card_id'    =>26000063,
            'created_at' =>'2019-01-07 20:54:31',
            'updated_at' =>'2019-01-07 20:54:31'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>496,
            'trader_id'  =>22,
            'card_id'    =>26000051,
            'created_at' =>'2019-01-07 21:22:35',
            'updated_at' =>'2019-01-07 21:22:35'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>497,
            'trader_id'  =>54,
            'card_id'    =>28000009,
            'created_at' =>'2019-01-08 07:14:08',
            'updated_at' =>'2019-01-08 07:14:08'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>498,
            'trader_id'  =>39,
            'card_id'    =>26000046,
            'created_at' =>'2019-01-08 09:01:10',
            'updated_at' =>'2019-01-08 09:01:10'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>500,
            'trader_id'  =>6,
            'card_id'    =>26000047,
            'created_at' =>'2019-01-09 09:48:48',
            'updated_at' =>'2019-01-09 09:48:48'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>501,
            'trader_id'  =>14,
            'card_id'    =>26000051,
            'created_at' =>'2019-01-09 10:01:11',
            'updated_at' =>'2019-01-09 10:01:11'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>502,
            'trader_id'  =>14,
            'card_id'    =>26000033,
            'created_at' =>'2019-01-09 10:01:57',
            'updated_at' =>'2019-01-09 10:01:57'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>503,
            'trader_id'  =>14,
            'card_id'    =>26000046,
            'created_at' =>'2019-01-09 10:02:16',
            'updated_at' =>'2019-01-09 10:02:16'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>504,
            'trader_id'  =>14,
            'card_id'    =>28000007,
            'created_at' =>'2019-01-09 10:03:47',
            'updated_at' =>'2019-01-09 10:03:47'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>505,
            'trader_id'  =>14,
            'card_id'    =>28000004,
            'created_at' =>'2019-01-09 10:04:19',
            'updated_at' =>'2019-01-09 10:04:19'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>506,
            'trader_id'  =>14,
            'card_id'    =>26000006,
            'created_at' =>'2019-01-09 10:04:39',
            'updated_at' =>'2019-01-09 10:04:39'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>507,
            'trader_id'  =>14,
            'card_id'    =>26000059,
            'created_at' =>'2019-01-09 10:08:12',
            'updated_at' =>'2019-01-09 10:08:12'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>508,
            'trader_id'  =>14,
            'card_id'    =>26000047,
            'created_at' =>'2019-01-09 10:10:50',
            'updated_at' =>'2019-01-09 10:10:50'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>509,
            'trader_id'  =>19,
            'card_id'    =>28000011,
            'created_at' =>'2019-01-09 10:12:46',
            'updated_at' =>'2019-01-09 10:12:46'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>510,
            'trader_id'  =>19,
            'card_id'    =>26000046,
            'created_at' =>'2019-01-09 10:12:57',
            'updated_at' =>'2019-01-09 10:12:57'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>511,
            'trader_id'  =>19,
            'card_id'    =>26000033,
            'created_at' =>'2019-01-09 10:13:10',
            'updated_at' =>'2019-01-09 10:13:10'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>512,
            'trader_id'  =>19,
            'card_id'    =>26000042,
            'created_at' =>'2019-01-09 10:13:19',
            'updated_at' =>'2019-01-09 10:13:19'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>513,
            'trader_id'  =>19,
            'card_id'    =>28000010,
            'created_at' =>'2019-01-09 10:13:26',
            'updated_at' =>'2019-01-09 10:13:26'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>514,
            'trader_id'  =>19,
            'card_id'    =>26000032,
            'created_at' =>'2019-01-09 10:13:38',
            'updated_at' =>'2019-01-09 10:13:38'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>515,
            'trader_id'  =>19,
            'card_id'    =>26000004,
            'created_at' =>'2019-01-09 11:04:03',
            'updated_at' =>'2019-01-09 11:04:03'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>516,
            'trader_id'  =>19,
            'card_id'    =>26000052,
            'created_at' =>'2019-01-09 11:07:29',
            'updated_at' =>'2019-01-09 11:07:29'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>517,
            'trader_id'  =>19,
            'card_id'    =>28000017,
            'created_at' =>'2019-01-09 11:09:20',
            'updated_at' =>'2019-01-09 11:09:20'
            ] );
                        
            DB::table('trads')->insert( [
            'id'         =>518,
            'trader_id'  =>19,
            'card_id'    =>26000047,
            'created_at' =>'2019-01-09 11:09:37',
            'updated_at' =>'2019-01-09 11:09:37'
            ] );


            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>26000052
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>27000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>28000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>27000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>26000018
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>26000011
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>26000036
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>26000014
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>231,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000024
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>27000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>27000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000022
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000031
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000056
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>27000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000047
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>28000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000043
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>232,
            'card_id' =>26000030
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>239,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>239,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>239,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>239,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>252,
            'card_id' =>26000063
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>260,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000053
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000056
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000047
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000031
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000043
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>27000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000024
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>28000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>28000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>262,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>267,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>334,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>334,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>334,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>334,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>334,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>334,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000040
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000011
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000021
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000018
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000014
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>26000052
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>27000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>335,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>28000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>339,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>28000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>26000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>347,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>400,
            'card_id' =>27000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>400,
            'card_id' =>26000018
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>400,
            'card_id' =>28000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>412,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>412,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>412,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>412,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>412,
            'card_id' =>26000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>412,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>26000028
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>26000039
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>26000040
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>27000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>422,
            'card_id' =>26000059
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>28000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>426,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000052
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000018
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>28000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000011
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000059
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000057
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000014
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>27000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>27000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>427,
            'card_id' =>26000039
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>428,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>457,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>467,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>28000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000031
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>27000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000043
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000056
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000022
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000024
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000047
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>28000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>26000019
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>468,
            'card_id' =>27000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>475,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>475,
            'card_id' =>27000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>475,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>475,
            'card_id' =>28000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>475,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>475,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>26000028
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>26000059
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>478,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>26000028
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>26000059
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>479,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>484,
            'card_id' =>26000037
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>484,
            'card_id' =>26000023
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>484,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>484,
            'card_id' =>26000055
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>486,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>486,
            'card_id' =>26000039
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>486,
            'card_id' =>28000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>486,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>486,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>487,
            'card_id' =>26000033
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>487,
            'card_id' =>26000046
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>487,
            'card_id' =>26000055
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>487,
            'card_id' =>28000011
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>487,
            'card_id' =>26000062
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>488,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>489,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>490,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000046
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000023
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>28000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000033
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000037
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000050
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>491,
            'card_id' =>26000042
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000044
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>493,
            'card_id' =>26000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>494,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>494,
            'card_id' =>26000032
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>28000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>28000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>28000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>28000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>495,
            'card_id' =>28000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>28000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>26000037
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>26000046
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>28000011
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>496,
            'card_id' =>26000023
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>26000054
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>27000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>26000060
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>26000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>497,
            'card_id' =>26000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>498,
            'card_id' =>28000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>500,
            'card_id' =>26000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>500,
            'card_id' =>26000030
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>500,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>500,
            'card_id' =>26000041
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>500,
            'card_id' =>28000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000046
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>28000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000050
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000055
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000037
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000023
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000042
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000048
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>501,
            'card_id' =>26000033
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>502,
            'card_id' =>26000023
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>502,
            'card_id' =>26000042
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>502,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>503,
            'card_id' =>26000023
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>503,
            'card_id' =>26000042
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>503,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>504,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>504,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>504,
            'card_id' =>26000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>504,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>504,
            'card_id' =>28000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>505,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>505,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>505,
            'card_id' =>26000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>505,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>505,
            'card_id' =>28000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>506,
            'card_id' =>26000045
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>506,
            'card_id' =>26000025
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>506,
            'card_id' =>26000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>506,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>506,
            'card_id' =>28000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000021
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000036
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>27000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000028
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>27000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000040
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>507,
            'card_id' =>26000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000019
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>27000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000031
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000056
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000030
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000043
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000024
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000022
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>27000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>27000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>508,
            'card_id' =>26000049
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>509,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>509,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>510,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>510,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>511,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>511,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>512,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>512,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>513,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>513,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>514,
            'card_id' =>26000026
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>514,
            'card_id' =>26000029
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>515,
            'card_id' =>26000015
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>515,
            'card_id' =>28000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>515,
            'card_id' =>26000034
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>515,
            'card_id' =>28000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>515,
            'card_id' =>26000020
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>515,
            'card_id' =>26000012
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>28000016
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>26000040
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>26000038
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000004
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>26000028
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>26000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000007
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>26000036
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>28000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000009
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>26000017
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>516,
            'card_id' =>27000003
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000024
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000043
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000030
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>27000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000022
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>28000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>27000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000019
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>27000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000056
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000049
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000031
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>28000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>517,
            'card_id' =>26000041
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000010
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000024
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000043
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000030
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>27000006
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000022
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000005
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>28000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000013
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>27000002
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000019
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>27000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000056
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000001
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000049
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000031
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>28000008
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000000
                ] );
                            
            DB::table('trad_has_cards')->insert( [
            'trad_id' =>518,
            'card_id' =>26000041
                ] );
                
                       
    }   
}
