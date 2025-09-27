<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscriber;

class EditSubscriber extends Component
{
    public $subscriber;
    public $id;
    public $name;

    public function mont(Subscriber $subscriber, $id)
    {
        $subscriber = Subscriber::find($id);
        $this->subscriber = $subscriber;
        $this->fill($this->subscriber->only(['name']));
    }

    public function Update_Subscriber(Subscriber $subscriber)
    {
        $this->subscriber->update([
            'name' => $this->name,
        ]);
        return redirect(route('read.subscriber'));
    }

    public function render()
    {
        return view('livewire.edit-subscriber');
    }
}
