<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
