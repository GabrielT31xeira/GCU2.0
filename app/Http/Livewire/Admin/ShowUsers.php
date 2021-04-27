<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public function render()
    {
        $search = request('search');
        if ($search){
            $users = User::where([
                ['nickname','like','%'.$search.'%']
            ])->get();
        }else{
            $users = User::all();
        }
        return view('livewire.admin.show-users',['users' => $users,'search' => $search]);
    }
}
