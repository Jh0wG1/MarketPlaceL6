<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{   
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable= [
        'name','description','phone','mobal_phone','slug'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }


}
