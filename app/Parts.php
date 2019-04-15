<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $table = 'parts';
    protected $fillable = [ 
        'completed','bikes_id','description'
    ];
    public function bikes() {
        return $this->belongsTo(bikes::class);
    }
}
