<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table="bus";
    protected $fillable=[

        'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type',
        'bu_small_dis', 'bu_meta','rooms' ,'bu_langtude', 'bu_latitude', 'bu_large_dis', 'bu_status', 'user_id','img'

    ];
}
