<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'event',
        'email',
        'phone',
        'country',
        'select_package',
        'address',
        'state',
        'city',
        'zip_code',
        'credit_card',
        'credit_card_number',
        'card_holder_name',
        'cvv',
        'expire_month',
        'expire_year'
    ];
}
