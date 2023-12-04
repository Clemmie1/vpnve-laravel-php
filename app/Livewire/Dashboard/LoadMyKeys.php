<?php

namespace App\Livewire\Dashboard;

use App\Models\VpnKey;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

class LoadMyKeys extends Component
{

    public $showModalConnect = false;
    public $url_connect = null;

    public function deleteKey($id)
    {
        sleep(0.5);
        $get = VpnKey::query()->find($id);

        if ($get){
            $get->delete();
            $this->dispatch('update');
        }
    }

    public function getConnect($id)
    {
        sleep(0.5);
        $get = VpnKey::query()->find($id);

        if ($get){
            $this->url_connect = $get->vpn_access_url;
            $this->showModalConnect = true;
        }
    }

    public function copyKey()
    {
        return $this->dispatch('refresh-products');
    }

    public function closeModal()
    {
        $this->showModalConnect = false;
        $this->url_connect = null;
    }

    #[Lazy]
    public function placeholder()
    {
        return view('Lazy.LoadMyKeys');
    }

    #[On('update')]
    public function render()
    {
        $get = VpnKey::query()->where(['owner_id' => Auth::user()->id])->orderBy('created_at', 'DESC')->get();
        return view('livewire.dashboard.load-my-keys', [
            'listKey' => $get
        ]);
    }
}
