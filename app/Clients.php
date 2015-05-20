<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model {

    protected $fillable = array('name', 'email', 'company', 'phone', 'cellphone');
    protected $table    = 'clients';

}
