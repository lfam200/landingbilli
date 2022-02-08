<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Mail\Contacto;

class FormContact extends Component
{
  public $name = '',$email = '',$phone = '',$message = '',$ruc='',$plan='';

  protected $rules = [
    'name' => 'required',
    'ruc' => 'required',
    'plan' => 'required',
    'email' => 'required|email',
];
  public function render()
  {
    return view('livewire.form-contact');
  }

  public function sendEmail()
  {
    $this->validate();

    $this->emit('alert');

    Mail::to('soporte@billi.pe')
        ->cc('cristhian.lopez@billi.pe')
        ->send(new Contacto($this->name,$this->email,$this->phone,$this->message,$this->ruc,$this->plan));

    $this->reset();
  }
}
