<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\User;

class Login extends Component
{
    public $users, $email, $password;

    public function render()
    {
        return view('livewire.login');
    }

    private function resetInputFields(){
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                //session()->flash('message', "You are Login successful.");
				redirect('/dashboard');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }
}