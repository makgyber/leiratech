<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class UserList extends Component
{
    public $showCreateForm = false;

    public $listeners = ['showUserCreateFormClicked' => 'toggleCreateForm'];

    public function toggleCreateForm()
    {  
        $this->showCreateForm = !$this->showCreateForm;
    }

    public function render()
    {
        return view('livewire.users.user-list');
    }
}
