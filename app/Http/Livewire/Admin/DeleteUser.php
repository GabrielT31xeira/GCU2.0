<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DeleteUser extends Component
{
    public function render($id)
    {
        return User::findOrFail($id)->delete();;
    }
}
