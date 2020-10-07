<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class t extends Model
{
    //
    protected $table = "t";
    protected $primaryKey="t_id";
    public $timestamps = false;

    protected $guarded = [];
    
}
