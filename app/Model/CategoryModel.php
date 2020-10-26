<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = "p_category";
    protected $primaryKey = "cate_id";
    public $timestamp = false;
    protected $guarded = [];
}
