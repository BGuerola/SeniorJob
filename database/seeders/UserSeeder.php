<?php
namespace database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder{


public function run(){

    user::create([
        'name'=> 'Bernat',
        'email'=> 'bgtrull@gmail.com',
        'password'=> bcrypt('12345678'),
    ])->assignRole('Admin');

    // user::factory(9)->create();

}



}
