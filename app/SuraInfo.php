<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuraInfo extends Model
{
    //

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function suraDetails()
    {
        return $this->hasMany(SuraInfoDetails::class, 'sura_id', 'id');
    }
}
