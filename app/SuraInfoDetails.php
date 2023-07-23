<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuraInfoDetails extends Model
{
    //

    protected $hidden = [
        'id', 'sura_id', 'created_at', 'updated_at',
    ];
}
