<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Cnb0cwwn7XzAe0GpOIuaSOXIkG0M86GcWa7fvvHd2.UzBOB/0q4re',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
