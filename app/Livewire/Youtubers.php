<?php

namespace App\Livewire;

use App\Models\Youtuber;
use Livewire\Component;
use Livewire\WithPagination;

class Youtubers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // public $youtubers = [];
    public $search ='';
    // public function mount(){
    //     $this->youtubers = Youtuber::all();
    // }
    public function render()
    {
        if(! $this->search){
            $youtubers = Youtuber::paginate(7);
        }else{
            $youtubers = Youtuber::where('owner_name','like','%'.$this->search.'%')->paginate(7);
        }
        return view('livewire.youtubers',[
            'youtubers' => $youtubers,
        ]);
    }

    public function deleteYoutuber(Youtuber $youtuber){
        $youtuber->delete();
        session()->flash('success','Data has been deleted...');
        return $this->redirect('/youtubers',navigate:true);
    }
}
