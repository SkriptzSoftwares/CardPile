<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'orders';
    public $timestamps = true;

    public function package() {
        return $this->belongsTo('App\Package');
    }
}
