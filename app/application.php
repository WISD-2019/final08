<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\staff;
use app\members;
use app\animal;
class application extends Model
{
    protected $table = 'application';

    protected $fillable = [
        'staff_id', 'reason', 'environment','pose_date','evaluation_date','evaluation_opinion','review_date','pass','pass_opinion'
    ];

    public $timestamps = false;

    public function staff()
    {
        return $this->hasmany(staff::class);
    }
    public function members()
    {
        return $this->hasone(members::class);
    }
    public function animal()
    {
        return $this->hasone(animal::class);
    }
}
