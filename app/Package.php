<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'packages';
    public $timestamps = true;

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
