<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    //
    protected $fillable = [
        'office_name',
            'pincode',
            'district',
            'rms'
    ];
}
