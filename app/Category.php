<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    public $timestamps = true;

    public function packages() {
        return $this->hasMany('App\Package');
    }
}
