<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'name', 'description'
    ];

    public function users()
    {
        //automatically manages the time stamps withTimestamps()
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
