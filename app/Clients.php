<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model {

    protected $hidden = '_token';
    protected $table = 'clients';

}
