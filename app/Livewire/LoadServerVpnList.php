<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Lazy;
use Livewire\Component;

class LoadServerVpnList extends Component
{


    #[Lazy]
    public function placeholder()
    {
        return view('Lazy.LoadServerVpnList');
    }

    public function render()
    {

        $data = json_decode(Storage::get('server-vpn-list.json'), true);
        return view('livewire.load-server-vpn-list', [
            'list' => $data
        ]);
    }
}
