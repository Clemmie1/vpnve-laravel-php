<?php

namespace App\Livewire;

use App\Http\Controllers\CreateKeyVpnController;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use function Termwind\render;

class LoadServerVpnList extends Component
{


    public function sendCreateKey($index)
    {
        $data = json_decode(Storage::get('server-vpn-list.json'), true);
        $create = CreateKeyVpnController::sendCreateKey($data['serverList'][$index]['api_url'], $data['serverList'][$index]['location_img']);
        if ($create){
            return $this->redirect(route('dashboard.home'));
        }

    }


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
