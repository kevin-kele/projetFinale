<?php

namespace App\Models;

use App\Models\wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WalletHistoric extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'montant_unitair', 'quantite', 'date'];

    public function wallet_id()
    {

        return $this->belongsToMany(wallet::class);
    }
}
