<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Subscription;

class Index extends Component
{
    public $email;

    public function rules(){
        return [
            'email' => 'required|string|email|unique:subscriptions,email',
        ];
    }

    public function resetInput(){
        $this->email = null;
    }

    public function saveSubscription() {
        $this->validate();

        Subscription::create([
            'email' => $this->email,
        ]);

        $this->dispatchBrowserEvent('success-alert');
        $this->resetInput();
    }



    public function render()
    {
        return view('livewire.main.index')->extends('layouts.main')->section('content');
    }
}
