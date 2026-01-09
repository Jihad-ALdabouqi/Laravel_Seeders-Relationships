<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Salon extends Model
{
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}

