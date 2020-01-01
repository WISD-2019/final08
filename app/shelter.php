<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\staff;
class shelter extends Model
{
    protected $table = 'shelters';

    protected $fillable = [
        'user_id', 'name', 'phone','address','public'
    ];

    public $timestamps = false;

    public function staff()
    {
        return $this->hasmany(staff::class);
    }
    public function aniaml()
    {
        return $this->hasmany(aniaml::class);
    }
}
