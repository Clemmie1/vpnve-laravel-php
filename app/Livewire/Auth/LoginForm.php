<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginForm extends Component
{

    use LivewireAlert;

    #[Rule('required|string|regex:/\w*$/|min:6|max:10|alpha',
        message: [
            'username.required' => 'Field is required.',
            'username.min' => 'Field must be at least 6 characters.',
            'username.max' => 'Field must not be greater than 15 characters.',
            'alpha' => 'Field must only contain letters.',
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

    public function loginAccount(): void
    {
        $this->validate();
        sleep(0.5);

        $arr = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if (!Auth::validate($arr)){
            $this->alert('error', "<span class='' style='font-weight: bold;'>Incorrect credentials</span>", [
                'position' => 'bottom-end',
                'timer' => 3000,
                'width' => '300',
                'toast' => true,
            ]);
            return;
        }

        $user = User::where('username', $this->username)->first();
        if ($user->banned){
            $this->alert('warning', 'Your account is blocked!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'width' => '320',
            ]);
            return;
        }


        Auth::attempt($arr);
        $this->redirect(route('dashboard.home'));

    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
