<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Biodata extends Component
{
    public $name;

    protected $listeners = [
        'nameUpdated' => 'render',
    ];
    public function updateName()
    {

        $user = User::find(Auth::user()->id);
        $this->validate([
            'name' => 'required|min:5',
        ]);
        $user->name = $this->name;
        $user->save();
        $this->emit('nameUpdated');
        $this->resetInputName();
        session()->flash('sucess', 'Name successfully updated');
        $this->dispatchBrowserEvent('close-model');
    }
    public function resetInputName()
    {
        $this->name = '';
    }
    public function render()
    {
        return view('livewire.frontend.user.biodata');
    }
}
