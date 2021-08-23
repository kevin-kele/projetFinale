<?php

namespace App\Models;

use App\Models\crypto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CryptoHistoric extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'date'];

    public function cryptoHistoric()
    {

        return $this->belongsToMany(crypto::class);
    }
}
