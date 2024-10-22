<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasFactory, Notifiable, HasApiTokens;
//Поля модели (обязательны для создания записей)
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'sex',
        'birthday',
        'login',
        'email',
        'password',
        'api_token',
        'role_id'
    ];

    //Поля которые скрываются при получении данных
    protected $hidden = [
        'password',
        'api_token',
    ];
    //Указание данных -> преобразованые при сохранении/извлечении из БД
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
    //Связь Многие/1
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
