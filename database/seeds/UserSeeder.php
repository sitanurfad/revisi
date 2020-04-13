<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' =>'Masyarakat',
        	'username' =>'rakyat',
        	'password' => bcrypt ('123456'),
        	'level' => 'masyarakat',
        ]);
    Masyarakat::create([
        'nik' => '1111111111111111',
        'nama' => $user->name,
        'username' => $user->name,
        'password' => bcrypt ($user->password),
        'telp' => '0897687689',
        'user_id' => $user->id,

    ]);

    }
}
