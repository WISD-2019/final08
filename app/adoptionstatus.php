<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\animal;

class adoptionstatus extends Model
{
    protected $table = 'adoptionstatus';

    protected $fillable = [
        'animal_id','return_date','status'
    ];

    public $timestamps = false;

    public function animal(){
        return $this->hasone(animal::class);
    }

}