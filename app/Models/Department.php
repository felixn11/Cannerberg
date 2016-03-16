<?php

namespace App\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;
use Illuminate\Support\Facades\DB;
use Eloquent;

class Department extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'department';

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }

}