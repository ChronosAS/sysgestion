<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('CREATE DATABASE IF NOT EXISTS venezuela');
        DB::statement('USE venezuela');
        $file_path = database_path('sql/venezuela.sql');
        if (file_exists($file_path)) {
            DB::unprepared(file_get_contents($file_path));
        }
        DB::statement('USE sysgestion');
        // User::factory(10)->create();
        Role::create([
            'name' => 'admin'
        ]);

        foreach($this->models() as $model => $actions){
            foreach ($actions as $action) {
                tap(Permission::create([
                    'name' => $model.':'.$action
                ]),function($permission){
                    $permission->assignRole('admin');
                });
            }
        }

        $user = User::factory()->create([
            'document' => 12345678,
            'first_names' => 'Test',
            'last_names' => 'User',
            'email' => 'test@example.com',
        ]);

        $user->assignRole('admin');
    }

    private function models(): array
    {
        return [
            'user' => $this->defaultActions(),
            'role' => $this->defaultActions(),
            'official' => $this->defaultActions(),
            'beneficiary' => $this->defaultActions(),
            'medicine' => $this->defaultActions(),
            'application' => $this->defaultActions(),
        ];
    }

    private function defaultActions(): array
    {
        return [
            'access',
            'view',
            'create',
            'edit',
            'delete',
            'restore'
        ];
    }
}
