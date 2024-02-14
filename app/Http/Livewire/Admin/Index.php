<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subscription;

class Index extends Component
{
    public $search;

    public function render()
    {

        $subscribers = Subscription::where('email', 'like', '%'.$this->search.'%')
        ->orderBy('created_at', 'ASC')
        ->paginate(10);

        $subscriberCount = Subscription::count();

        return view('livewire.admin.index', [
            'subscribers' => $subscribers,
            'subscriberCount' => $subscriberCount,
        ])->extends('layouts.admin')->section('content');
    }
}
