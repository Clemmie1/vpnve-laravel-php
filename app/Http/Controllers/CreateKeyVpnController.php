<?php

namespace App\Http\Controllers;

use App\Models\VpnKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OutlineApiClient\OutlineApiClient;

class CreateKeyVpnController extends Controller
{
    public static function sendCreateKey($api_url, $loc){
        try {
            $api = new OutlineApiClient($api_url);

            $key = $api->create();

            $api->setName($key['id'], 'New key name');

            VpnKey::create([
                'owner_id' => Auth::id(),
                'vpn_location' => $loc,
                'vpn_access_id' => $key['id'],
                'vpn_access_url' => $key['accessUrl'],
            ]);

            return true;

        } catch (\Exception $e) {
            return false;
        }
    }
}
