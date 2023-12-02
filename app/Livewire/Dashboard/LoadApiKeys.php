<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Faker\Core\Uuid;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;
use function Termwind\render;

class LoadApiKeys extends Component
{

    public function generateApiKey()
    {
        $key = \Ramsey\Uuid\Uuid::uuid4()->toString();

        User::query()->where(['id'=>Auth::user()->id])->update(['api_key'=>$key]);

        $this->dispatch('update-api-key');
    }

    public function deleteApiKey()
    {

        User::query()->where(['id'=>Auth::user()->id])->update(['api_key'=>null]);

        $this->dispatch('update-api-key');

    }

    #[Lazy]
    public function placeholder()
    {
        return view('Lazy.LoadApiKeys');
    }

    #[On('update-api-key')]
    public function render()
    {
        $getKey = User::query()->where('id', Auth::user()->id)->first();
        return view('livewire.dashboard.load-api-keys', [
            'getKey' => $getKey->api_key
        ]);
    }
}
