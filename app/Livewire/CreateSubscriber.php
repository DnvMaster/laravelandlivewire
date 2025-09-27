<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscriber;

class CreateSubscriber extends Component
{
    public $name;

    public function Create_Subscribe()
    {
        Subscriber::create([
            'name' => $this->name,
        ]);
        return redirect(route('read.subscriber'));
    }

    public function render()
    {
        return view('livewire.subscriber');
    }
}
