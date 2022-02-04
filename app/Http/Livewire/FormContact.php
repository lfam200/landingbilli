<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Mail\Contacto;

class FormContact extends Component
{
  public $name = '',$email = '',$phone = '',$message = '';

  protected $rules = [
    'name' => 'required',
    'email' => 'required|email',
];
  public function render()
  {
    return view('livewire.form-contact');
  }

  public function sendEmail()
  {
    $this->validate();

//    dd($this->message);
    Mail::to('soporte@billi.pe')->cc('cristhian.lopez@billi.pe')->send(new Contacto($this->name,$this->email,$this->phone,$this->message));
  }
}
