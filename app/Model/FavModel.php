<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FavModel extends Model
{
    protected $table = "p_fav";
    protected $primaryKey = "id";
    public $timestamp = false;
    protected $guarded = [];
}
