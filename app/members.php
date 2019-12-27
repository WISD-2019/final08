<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\animal;
use app\application;
use app\user;
class members extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'user_id', 'date', 'date','number','phone'
    ];

    public $timestamps = false;

    public function aniaml()
    {
        return $this->hasmany(aniaml::class);
    }
    public function application()
    {
        return $this->hasmany(application::class);
    }
    public function user()
    {
        return $this->hasone(user::class);
    }
}
