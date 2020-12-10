<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->state([
            'name' => 'Admin',
            'email' => 'admin@devphp.in',
            'role' => 'admin'
        ])->make();

        var_dump($user->save());
    }
}
