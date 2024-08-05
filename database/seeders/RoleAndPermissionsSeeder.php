<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate([
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

        $user = User::firstOrCreate([
            'document' => 12345678,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'accepted' => true,
        ]);

        $user->assignRole('admin');
    }

    private function models(): array
    {
        return [
            'user' => $this->defaultActions(),
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
