<?php

namespace App\Models;

use Eloquent;

class Jobrole extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobrole';

    public function employee(){
        return $this->hasMany('App\Models\Employee', 'id', 'id');
    }

}