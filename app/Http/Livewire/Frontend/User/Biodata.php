<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Biodata extends Component
{
    public $name, $birthday, $place_birth;

    protected $listeners = [
        'nameUpdated' => 'render',
        'birthdayUpdated' => 'render',
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

    public function updateBirthday()
    {
        $this->validate([
            'birthday' => 'nullable|date',
            'place_birth' => 'nullable|string',
        ]);

        $user = User::find(Auth::user()->id);
        if ($this->place_birth) {
            $user->place_birth = $this->place_birth;
        }
        if ($this->birthday) {
            $user->birthday = $this->birthday;
        }
        $user->save();
        $this->emit('birthdayUpdated');
        $this->resetInputBirthday();
        session()->flash('sucess', 'Name successfully updated');
        $this->dispatchBrowserEvent('close-model');
    }
    public function resetInputBirthday()
    {
        $this->birthday = '';
        $this->place_birth = '';
    }
    public function render()
    {
        return view('livewire.frontend.user.biodata');
    }
}
