<?php

namespace App\Models;

use Eloquent;

class Rank extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rank';

    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }

}