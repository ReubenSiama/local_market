<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressOfSeller extends Model
{
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
