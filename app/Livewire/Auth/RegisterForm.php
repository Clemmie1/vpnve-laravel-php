<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RegisterForm extends Component
{

    use LivewireAlert;

    #[Rule('required|string|regex:/\w*$/|min:6|max:10|unique:users,username|alpha',
        message: [
            'username.required' => 'Field is required.',
            'username.min' => 'Field must be at least 6 characters.',
            'username.max' => 'Field must not be greater than 15 characters.',
            'alpha' => 'Field must only contain letters.',
            'unique' => 'The username is already taken.',
        ],
        onUpdate: true
    )]
    public $username;

    #[Rule('required|min:6',
        message: [
            'password.required' => 'Field is required.',
            'password.min' => 'Field must be at least 6 characters.'
        ],
        onUpdate: true
    )]
    public $password;

    public function createAccount(): void
    {
        $this->validate();
        sleep(0.5);

        try {
            $user = User::create([
                'username' => $this->username,
                'password' => bcrypt($this->password),
            ]);

            $this->alert('success', "<a class='text-muted' style='font-weight: bold;'>Подтверждение отправлено</a>", [
                'position' => 'bottom-end',
                'timer' => 3000,
                'width' => '300',
                'toast' => true,
            ]);


        } catch (QueryException $e) {
            $this->alert('error', "<a class='text-muted' style='font-weight: bold;'>Почта занята</a>", [
                'position' => 'bottom-end',
                'timer' => 3000,
                'width' => '300',
                'toast' => true,
            ]);
        }


    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
