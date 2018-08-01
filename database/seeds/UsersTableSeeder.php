<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $user = new User;
        $user->name = 'jinmy solis';
         $user->email = 'solisjinmy@gmail.com';
          $user->password = bcrypt('jinmysolis');
           $user->save();
        
    }
}
