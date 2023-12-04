<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GetServerList extends Controller
{
    public function getList()
    {
        $data = json_decode(Storage::get('server-vpn-list.json'), true);

        foreach ($data['serverList'] as &$server) {
            unset($server['api_url']);
            unset($server['port']);
        }

        return response()->json(['serverList' => $data['serverList']], 200);
    }
}
