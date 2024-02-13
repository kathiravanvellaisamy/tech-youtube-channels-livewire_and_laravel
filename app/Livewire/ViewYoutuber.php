<?php

namespace App\Livewire;

use App\Models\Youtuber;
use Livewire\Component;

class ViewYoutuber extends Component
{
    public $youtuber = [];
    public function mount(Youtuber $youtuber){
        $this->youtuber = $youtuber;
    }
    public function render()
    {
        return view('livewire.view-youtuber');
    }
}
