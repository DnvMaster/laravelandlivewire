<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscriber;

class ReadSubscriber extends Component
{
    public $id;
    public $subscriber;

    public function Delete_Subscriber($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->delete();
        return redirect(route('read.subscriber'));
    }

    public function render()
    {
        return view('livewire.read-subscriber',[
            'subscribers' => Subscriber::all()
        ]);
    }
}
