<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VpnKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Random;
use OutlineApiClient\OutlineApiClient;

class CoreApiKey extends Controller
{
    public function createKey(Request $request)
    {
        if ($request->method() !== "POST") {
            return response()->json([
                'success' => false,
                'error' => 'Invalid request method'
            ], 405);
        }

        if (!$request->get('server_id')){
            return response()->json([
                'success' => false,
                'error' => 'Parameter server_id not passed'
            ], 503);
        }

        $serverId = $request->get('server_id');
        $data = json_decode(Storage::get('server-vpn-list.json'), true);

        $foundServer = null;
        foreach ($data['serverList'] as $server) {
            if ($server['id'] == $serverId) {
                $foundServer = $server;
                break;
            }
        }

        if (!$foundServer) {
            return response()->json([
                'success' => false,
                'error' => 'Server not found'
            ], 404);
        }

        $apiKey = $request->header('VV-KEY');
        $getUserId = User::query()->where(['api_key'=>$apiKey])->first()->id;

        try {
            $api = new OutlineApiClient($foundServer['api_url']);

            $genVpnId = 'K-'.Random::generate(11);
            $key = $api->create();

            $api->setName($key['id'], $genVpnId);



            $res = VpnKey::create([
                'owner_id' => $getUserId,
                'vpn_location' => $foundServer['location_img'],
                'vpn_access_id' => $key['id'],
                'vpn_access_url' => $key['accessUrl'] .'#'. $genVpnId .' / vpnve.com',
            ]);

            unset($key['name']);
            unset($key['id']);
            unset($key['method']);
            return response()->json([
                'success' => true,
                'key_id' => $res['id'],
                'host' => $foundServer['host'],
                [
                    $key
                ]
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['success' => false], 503);
        }


    }

    public function getKey(Request $request)
    {
        if (!$request->get('key_id')){
            return response()->json([
                'success' => false,
                'error' => 'Parameter key_id not passed'
            ], 503);
        }

        $key = VpnKey::where('id', $request->get('key_id'))->first();

        if ($key === null) {
            return response()->json([
                'success' => false,
                'error' => 'Not found VPN key'
            ], 404);
        }

        $arr = [
            'success' => true,
            'vpn_traffic_mb' => $key['vpn_traffic_mb'],
            'vpn_access_url' => $key['vpn_access_url'],
            'created_at' => $key['created_at'],
        ];

        return response()->json($arr, 200);

    }

    public function deleteKey(Request $request)
    {
        if (!$request->get('key_id')){
            return response()->json([
                'success' => false,
                'error' => 'Parameter key_id not passed'
            ], 503);
        }

        $key = VpnKey::where('id', $request->get('key_id'))->first();

        if ($key === null) {
            return response()->json([
                'success' => false,
                'error' => 'Not found VPN key'
            ], 404);
        }

        $key->delete();

        return response()->json(['success' => true], 200);

    }
}
