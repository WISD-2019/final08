<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\animals;

class adoptionstatus extends Model
{
    protected $table = 'adoptionstatus';

    protected $fillable = [
        'animal_id','return_date','status'
    ];

    public $timestamps = false;

    public function animals(){
        return $this->hasone(animals::class);
    }

}
