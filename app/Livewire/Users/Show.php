<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }


    public function render()
    {
        return view('livewire.users.show')->layout('layouts.app',['header'=> $this->user->name]);
    }
}
