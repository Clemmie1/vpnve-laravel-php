<?php

namespace App\Livewire\Dashboard;

use App\Models\VpnKey;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Lazy;
use Livewire\Component;

class LoadMyKeys extends Component
{

    #[Lazy]
    public function placeholder()
    {
        return view('Lazy.LoadMyKeys');
    }

    public function render()
    {
        $get = VpnKey::query()->where(['owner_id' => Auth::user()->id])->get();
        return view('livewire.dashboard.load-my-keys', [
            'listKey' => $get
        ]);
    }
}
