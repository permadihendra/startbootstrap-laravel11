<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Homepage extends Component
{

    #[Layout('layouts.blog')]
    public function render()
    {
        return view('livewire.blog.homepage');
    }
}
