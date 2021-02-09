<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class AdminSettings extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','meta_keyword', 'meta_description','header_section','footer_section','copyright','social_links','address','phone','email','fremail',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
        
    ];



}


?>