<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'shelter_id', 'title', 'context'
    ];

    public $timestamps = false;

    public function shelter()
    {
        return $this->hasOne(shelter::class);
    }
}
