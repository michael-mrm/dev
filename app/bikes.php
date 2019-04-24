<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bikes extends Model
{
    protected $table = 'bikes';
    protected $fillable = [ 
        'brand','model','price','owner_id'
    ];

    public function parts(){
        return $this->hasMany(Parts::class);
    }

}
