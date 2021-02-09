<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
///use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use App\Slide;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Tymon\JWTAuth\Contracts\JWTSubject;

// class Admin extends Model implements AuthenticatableContract, AuthorizableContract
class Slider extends Model
{
    // use Authenticatable, Authorizable;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey='sid';
    public $incrementing='false';

    public function slide()
     {
        return $this->hasMany('App\Slide','sid');
     }
    protected $fillable = [
        'sid','slider_title', 'slider_page',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    


}


?>