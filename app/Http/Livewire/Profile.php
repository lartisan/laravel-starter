<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    use WithFileUploads;

    public $avatar;
    public $name;
    public $email;
    public $current_password;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'avatar' => 'nullable|image|max:2000',
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        if ($this->avatar) {
            $filename = $this->avatar->store('avatars');

            auth()->user()->update([
                'avatar' => $filename,
                'name' => $this->name,
                'email' => $this->email,
            ]);
        } else {
            auth()->user()->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        }

        toast('Your profile was updated!', 'success');
        return redirect('admin/profile');
    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'password' => 'required_with:current_password',
            'password_confirmation' => 'same:password|required_with:password',
        ]);

        if (Hash::check($this->current_password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => Hash::make($this->password),
            ]);

            toast('Your password was changed!', 'success');
            return redirect('admin/profile');
        }

        toast('The current password is not correct!', 'error');
        return redirect('admin/profile');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
