<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AuthController extends Component
{

   


    public function render()
    {
      return view('livewire.auth.login');
    }



}
