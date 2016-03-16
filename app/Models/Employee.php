<?php

namespace App\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;
use Eloquent;
use Illuminate\Support\Facades\DB;

class Employee extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee';

    /**
     * @return mixed
     */
    public function rank()
    {
        return $this->belongsTo('App\Models\Rank', 'rankid', 'id');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'departmentid', 'id');
    }

    public function jobrole()
    {
        return $this->belongsTo('App\Models\Jobrole', 'jobroleid', 'id');
    }

    public function nationality()
    {
        return $this->belongsTo('App\Models\Nationality', 'nationalityid', 'id');
    }

}