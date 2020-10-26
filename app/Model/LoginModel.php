<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = "index_login";
    protected $primaryKey = "id";
    public $timestamp = false;
    protected $guarded = [];
}
