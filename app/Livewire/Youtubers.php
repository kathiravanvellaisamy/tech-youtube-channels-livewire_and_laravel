<?php

namespace App\Livewire;

use App\Models\Youtuber;
use Livewire\Component;

class Youtubers extends Component
{
    public $youtubers = [];

    public function mount(){
        $this->youtubers = Youtuber::all();
    }
    public function render()
    {
        return view('livewire.youtubers');
    }
}
