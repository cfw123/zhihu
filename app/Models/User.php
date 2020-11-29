<?php

namespace App\Models;

use App\Models\traits\Query;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as UserModel;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends UserModel implements JWTSubject
{
    //
    use Query, SoftDeletes ,Notifiable;
    protected $dates   = ['deleted_at'];

    protected $guarded = [];

    // 获取器        get+字段名+Attribute($value)
    public function getCreatedAtAttribute($value) {
        return date('Y年m月d日 H时i分s秒', strtotime($value));
    }


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }
}
