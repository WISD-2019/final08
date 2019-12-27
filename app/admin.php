<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\user;
class admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'users_id'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
