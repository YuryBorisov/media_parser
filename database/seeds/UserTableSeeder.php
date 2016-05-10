<?php

use Illuminate\Database\Seeder;
use App\User as User;
  
class UserTableSeeder extends Seeder {
  
    public function run() {
        User::truncate();
  
        $user = User::create( [
            'email' => 'it@digital-mind.ru' ,
            'password' => Hash::make( 'dmps2468' ) ,
            'name' => 'Administrator' ,
        ] );

        $user->makeEmployee('super_admin');
    }
}