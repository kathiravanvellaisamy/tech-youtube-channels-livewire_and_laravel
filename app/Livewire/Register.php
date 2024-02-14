<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser(){
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:4|max:8'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);
        session()->flash('success','Registered successfully');
        return $this->redirect('/youtubers',navigate:true);
    }
}
