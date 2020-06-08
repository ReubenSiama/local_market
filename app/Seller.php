<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function address()
    {
        return $this->hasOne(AddressOfSeller::class);
    }

    public function businessPartner()
    {
        return $this->hasMany(BusinessPartner::class);
    }

    public function businessType()
    {
        return $this->belongsTo(BusinessType::class);
    }

    public function contactNumberForCustomer()
    {
        return $this->hasMany(ContactNumberForCustomer::class);
    }

    public function insideShopImage()
    {
        return $this->hasMany(InsideShopImage::class);
    }

    public function sellerBankAccount()
    {
        return $this->hasOne(SellerBankAccount::class);
    }


}
