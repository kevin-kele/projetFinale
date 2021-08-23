<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crypto extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function cryptos()
    {

        return $this->belongsToMany(Cryptohistoric::class);
    }
}
