<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\staff;
use app\animal;
class shelter extends Model
{
    protected $table = 'shelters';

    protected $fillable = [
        'name', 'phone','address','public'
    ];

    public $timestamps = false;

    public function staff()
    {
        return $this->hasmany(staff::class);
    }
    public function aniaml()
    {
        return $this->hasmany(animal::class);
    }
    public function post()
    {
        return $this->hasMany(post::class);
    }
}
