<?php

namespace App\Http\Controllers;

use App\Models\VpnKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;
use OutlineApiClient\OutlineApiClient;

class CreateKeyVpnController extends Controller
{
    public static function sendCreateKey($api_url, $loc){
        try {
            $api = new OutlineApiClient($api_url);

            $genVpnId = 'K-'.Random::generate(11);
            $key = $api->create();

            $api->setName($key['id'], $genVpnId);


            VpnKey::create([
                'owner_id' => Auth::id(),
                'vpn_location' => $loc,
                'vpn_access_id' => $key['id'],
                'vpn_access_url' => $key['accessUrl'] .'#'. $genVpnId .' / vpnve.com',
            ]);

            return true;

        } catch (\Exception $e) {
            return false;
        }
    }
}
