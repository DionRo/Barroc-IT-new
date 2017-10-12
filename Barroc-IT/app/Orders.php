<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'tbl_orders';

    public function company()
    {
        return $this->hasOne('App\Company', 'companyNr');
    }
}
