<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $role_admin = Role::where('code','admin')->first()->id;
        $role_user = Role::where('code','user')->first()->id;
       User::create([
           'surname'=>'Ломовцев',
           'name'=>'Захар',
           'patronymic'=>'Александрович',
           'sex'=>1,
           'birthday'=> '2006-09-21',
           'login' => 'zuhlut1k',
           'email' => 'zuhlut1k@mail.ru',
           'password' => 'Zaxarlut1k',
           'api_token'=>null,
           'role_id' => $role_admin,
       ]);
        User::create([
            'surname'=>'Ломовцевa',
            'name'=>'Маргарита',
            'patronymic'=>'Александровна',
            'sex'=>1,
            'birthday'=> '2008-11-07',
            'login' => 'margolut1k',
            'email' => 'margokrasavica@mail.ru',
            'password' => 'Margocool',
            'api_token'=>null,
            'role_id' => $role_user,
        ]);
    }
}
