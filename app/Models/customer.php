<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
