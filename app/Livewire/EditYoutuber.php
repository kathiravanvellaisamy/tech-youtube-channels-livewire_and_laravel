<?php

namespace App\Livewire;

use App\Models\Youtuber;
use Livewire\Component;

class EditYoutuber extends Component
{
    public $youtuber;
    public $youtube_name;
    public $channel_link;
    public $owner_name;
    public $country;
    public $github;

    public function mount(Youtuber $youtuber){
        $this->youtuber= $youtuber;
        $this->youtube_name = $youtuber->youtube_name;
        $this->channel_link = $youtuber->channel_link;
        $this->owner_name = $youtuber->owner_name;
        $this->country = $youtuber->country;
        $this->github = $youtuber->github;
    }

    public function updateYoutuber(){
         $validated = $this->validate([
            'youtube_name' => 'required',
            'channel_link' => 'required',
            'owner_name' => 'required',
            'country' => 'required',
            'github' => 'required',
        ]);

        $this->youtuber->update($validated);
        session()->flash('success','Data has been updated...');
        return $this->redirect('/youtubers',navigate:true);
    }
    public function render()
    {
        return view('livewire.edit-youtuber');
    }
}
