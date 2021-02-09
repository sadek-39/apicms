<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
///use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Tymon\JWTAuth\Contracts\JWTSubject;

// class Admin extends Model implements AuthenticatableContract, AuthorizableContract
class Slide extends Model
{
    // use Authenticatable, Authorizable;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey='sdid';
    public $incrementing='false';

    public function slider()
    {
        return $this->belongsTo('App\Slider');
    }
    protected $fillable = [
        'sdid','slide_title','slide_page_url','image','slide_target_url','slide_text','sid'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    // public function slide()
    // {
    //     return $this->belongsTo(Slider::class);
    // }
    


}


?>