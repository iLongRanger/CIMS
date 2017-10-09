<?php

use Illuminate\Database\Seeder;
use App\User;
class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        //  Create users
        $users = [
            ["role_id" => 1, "is_active" => 1, "name" => "Ralp Jeff Ortiz", "email" => "rortiz0305@gmail.com", "password" => \Hash::make("password")],
            ];

        User::insert($users);

    }
}
