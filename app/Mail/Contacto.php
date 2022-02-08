<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    private $name,$email,$phone,$text,$ruc,$plan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $text, $ruc,$plan)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->text = $text;
        $this->ruc = $ruc;
        $this->plan = $plan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        dd($this->text);
      return $this->from($this->email)
                  ->subject('Contacto Demo')
                  ->view('mail.contacto', [
                      'name' => $this->name,
                      'email' => $this->email,
                      'phone'  => $this->phone,
                      'text' => $this->text,
                      'ruc' => $this->ruc,
                      'plan' => $this->plan,
                  ]);
    }
}
