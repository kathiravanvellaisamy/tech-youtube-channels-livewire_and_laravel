<?php

namespace App\Livewire;

use App\Models\Youtuber;
use Livewire\Component;

class AddYoutuber extends Component
{
    public $youtube_name = '';
    public $channel_link = '';
    public $owner_name = '';
    public $country = '';
    public $github = '';
    // public $logo = '';

    public function render()
    {

        return view('livewire.add-youtuber');
    }

    public function save(){

        $validated = $this->validate([
            'youtube_name' => 'required|max:255',
            'channel_link' => 'required|max:255',
            'owner_name' => 'required|max:255',
            'country' => 'required|max:255',
            'github' => 'required|max:255',
        ]);

        Youtuber::create($validated);
        session()->flash('success','Data has been creeated...');
        return $this->redirect('/youtubers',navigate:true);

    }
}
