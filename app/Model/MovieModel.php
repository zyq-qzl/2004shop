<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    protected $table = "movie";
    protected $primaryKey = "id";
    public $timestamp = false;
}
