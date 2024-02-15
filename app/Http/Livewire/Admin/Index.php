<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subscription;

class Index extends Component
{
    public $search;
    public $subscriber_id, $banEmail;
    public $table_id;


    public function resetData() {
        $this->banEmail = NULL;
        $this->subscriber_id = NULL;
        $this->reset('table_id');
    }

    public function closeModal(){
        $this->resetData();
    }

    public function deactivate($subscriber_id)
    {
        $this->subscriber_id = $subscriber_id;
        $subscriber = Subscription::findOrFail($subscriber_id);
        $this->banEmail = $subscriber->email;
    }

    public function deactivateSubscription()
    {
        Subscription::findOrFail($this->subscriber_id)->update([
            'status' => 0,
        ]);
        session()->flash('message', 'Subscription Deactivated Successfully.');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetData();
    }

    public function activateSubscription($subscriber_id)
    {
        $this->subscriber_id = $subscriber_id;
        Subscription::findOrFail($this->subscriber_id)->update([
            'status' => 1,
        ]);
        session()->flash('message', 'Subscription activated Successfully.');
        $this->resetData();
    }

    public function getSubscriptionList(){

        $this->dispatchBrowserEvent('download-list', ['table_id' => $this->table_id]);
        $this->resetData();
    }

    public function render()
    {

        $subscribers = Subscription::where('email', 'like', '%'.$this->search.'%')
        ->orderBy('status', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        $subscriberCount = Subscription::count();
        $ActiveSubscriberCount = Subscription::where('status', 1)->count();


        return view('livewire.admin.index', [
            'subscribers' => $subscribers,
            'subscriberCount' => $subscriberCount,
            'ActiveSubscribers' => $ActiveSubscriberCount,
        ])->extends('layouts.admin')->section('content');
    }
}
