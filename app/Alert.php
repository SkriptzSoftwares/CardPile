<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'alerts';
    public $timestamps = true;
}
