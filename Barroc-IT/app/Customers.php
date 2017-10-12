<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = 'tbl_customers';

    public function company()
    {
    return $this->hasOne('App\Finance', 'companyNr');
    }
    public function orders()
    {
        return $this->hasOne('App\Orders', 'orderNr');
    }
}
