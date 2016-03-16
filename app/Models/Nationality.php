<?php
namespace App\Models;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;
use Eloquent;
use Illuminate\Support\Facades\DB;

class Nationality extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nationality';

    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }

}