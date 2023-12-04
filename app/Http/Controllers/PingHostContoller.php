<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingHostContoller extends Controller
{
    public static function getPingHoist(string $host, int $port, int $timeout)
    {
        $tB = microtime(true);
        $fP = fSockOpen($host, $port,$timeout);
        if (!$fP) {
            return false;
        }
        $tA = microtime(true);
        return round((($tA - $tB) * 1000), 0);
    }
}
