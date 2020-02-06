<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pnexam extends Model
{
    protected $fillable = [
        'employee',
        'clock_in',
        'start',
        'end',
        'checkout',

    ];
}
