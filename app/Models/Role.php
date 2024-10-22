<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];

    //Связь 1/Многим
    public function users(){
        return $this->hasMany(User::class);
    }
}
