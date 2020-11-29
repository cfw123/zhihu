<?php

namespace App\Models;

use App\Models\traits\Query;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as UserModel;

class User extends UserModel
{
    //
    use Query, SoftDeletes;
    protected $dates   = ['deleted_at'];

    protected $guarded = [];

    // 获取器        get+字段名+Attribute($value)
    public function getCreatedAtAttribute($value) {
        return date('Y年m月d日 H时i分s秒', strtotime($value));
    }



}
