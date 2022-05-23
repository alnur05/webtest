<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role_adm = \App\Models\Role::factory()->create([
            'name' => 'admin'
        ]);

        $role_emp = \App\Models\Role::factory()->create([
            'name' => 'employee'
        ]);

        $user = \App\Models\User::factory()->create([
            'username' => 'alnur005',
            'role_id' => $role_adm->id
        ]);

        \App\Models\Task::factory(2)->create([
            'user_id' => $user->id
        ]);

        \App\Models\Task::factory(2)->create([
            'tester_id' => $user->id
        ]);
    }
}
