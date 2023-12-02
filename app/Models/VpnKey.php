<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VpnKey extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'owner_id',
        'vpn_location',
        'vpn_access_id',
        'vpn_access_url',
        'vpn_traffic_mb',
    ];
}
