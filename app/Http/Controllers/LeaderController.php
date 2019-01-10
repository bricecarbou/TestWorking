<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderController extends Controller
{

    public function AddClan()
    {
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->role->name === 'admin') and !(auth()->user()->role->name === 'leader')) {
            flash("Only the leader or admin can  access to this page.")->error();

            return redirect('/my-account');
        }


        request()->validate([
            'clan' => ['required'],
        ]);

        $group = \App\ClanGroup::find(auth()->user()->clan->group->id);

        \App\Clan::create(['name'=>request('clan'), 'group_id'=>$group->id]);
        
        flash("The Clan has been created.")->success();

        return back();
    }
  
    public function DeleteClan()
    {
        // Vérification que la personne est bien connectée
        if (!(auth()->user()->role->name === 'admin') and !(auth()->user()->role->name === 'leader')) {
            flash("Only the leader or admin can  access to this page.")->error();

            return redirect('/my-account');
        }

        request()->validate([
            'clan' => ['required'],
        ]);

        $clan = \App\Clan::find(request('clan'));

        $clan->delete();
        
        flash("The Clan has been Delete.")->success();

        return back();
    }
}
