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
      $user = new User;
      $user->truncate();
      $userArray = [
            [
              'name' => 'Rohit User',
              'email' => 'rohit09@gmail.com',
              'password' => Hash::make('123456'),
              'role'=>'rohit'
           ],
          ];

          foreach ($userArray as $getUser) {
            $user = new User;
            $user->name  = $getUser['name'];
            $user->email = $getUser['email'];
            $user->password = $getUser['password'];
            $user->role = $getUser['role'];
            $user->save();
          }
    }
}
