<?php

namespace App\Models;

use App\Models\User;
use App\Models\crypto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class wallet extends Model
{
    use HasFactory;

    public function cryptos_id()
    {

        return $this->belongsToMany(crypto::class);
    }

    public function client_id()
    {

        return $this->belongsToMany(User::class);
    }
}
