<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    public function __construct()
    {
        $this->table = 'permissions';
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $permissions = [
           'system-list',
           'role',
           'user',
           'permission',

        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
