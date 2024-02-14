<?php

namespace App\Livewire;

use App\Models\Youtuber;
use Livewire\Component;

class Youtubers extends Component
{
    public $youtubers = [];
    public $search ='';
    // public function mount(){
    //     $this->youtubers = Youtuber::all();
    // }
    public function render()
    {
        if(! $this->search){
            $this->youtubers = Youtuber::all();
        }else{
            $this->youtubers = Youtuber::where('owner_name','like','%'.$this->search.'%')->get();
        }
        return view('livewire.youtubers');
    }

    public function deleteYoutuber(Youtuber $youtuber){
        $youtuber->delete();
        session()->flash('success','Data has been deleted...');
        return $this->redirect('/youtubers',navigate:true);
    }
}
