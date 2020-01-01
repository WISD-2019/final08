<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\adoptionstatus;
use app\members;
use app\shelter;
use app\application;
class animal extends Model
{
    protected $table = 'animals';

    protected $fillable = [
        'member_id','staff_id','shelter_id','application','kind','variety','gender','age','size','adoptionstatus_date','track_date','track_description','housing_date'
    ];

    public $timestamps = false;

    public function adoptionstatus(){
        return $this->hasmany(adoptionstatus::class);
    }
    public function members(){
        return $this->hasone(members::class);
    }
    public function shelter()
    {
        return $this->hasone(shelter::class);
    }
    public function application()
    {
        return $this->hasmany(application::class);
    }
    public function staff()
    {
        return $this->hasone(staff::class);
    }
}
