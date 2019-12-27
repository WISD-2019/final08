<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\application;
use app\shelter;
class staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [
        'user_id', 'shelter_id', 'psoition'
    ];

    public $timestamps = false;

    public function application()
    {
        return $this->hasmany(application::class);
    }
    public function shelter()
    {
        return $this->hasone(shelter::class);
    }
}
