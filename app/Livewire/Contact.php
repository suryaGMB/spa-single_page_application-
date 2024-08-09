<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use App\Mail\ConfirmationMail;

#[layout('layout.app')]
class Contact extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string|min:5',
    ];

    

    public function render()
    {
        return view('livewire.contact');
    }

    

    public function submitForm()
    {
        $this->validate();
        DB::table('contacts')->insert([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        Mail::to($this->email)->send(new ConfirmationMail($this->name));
       
        
        
        $this->reset();
    }
}
