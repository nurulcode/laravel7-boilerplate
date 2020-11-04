<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

           'master-list',
           'master-create',
           'master-edit',
           'master-delete',

           'pegawai-list',
           'pegawai-create',
           'pegawai-edit',
           'pegawai-delete',

           'history-list',
           'history-create',
           'history-edit',
           'history-delete',

           'kepegawaian-list',
           'kepegawaian-create',
           'kepegawaian-edit',
           'kepegawaian-delete',

           'laporan-list',
           'laporan-create',
           'laporan-edit',
           'laporan-delete',

        ];

        $roles = [
            'system-list',
            'role',
            'user',
            'permission',

            'master-list',
            'master-create',
            'master-edit',
            'master-delete',

            'pegawai-list',
            'pegawai-create',
            'pegawai-edit',
            'pegawai-delete',

            'history-list',
            'history-create',
            'history-edit',
            'history-delete',

            'kepegawaian-list',
            'kepegawaian-create',
            'kepegawaian-edit',
            'kepegawaian-delete',

            'laporan-list',
            'laporan-create',
            'laporan-edit',
            'laporan-delete',
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }

        foreach ($roles as $role) {
             Role::create(['name' => $role]);
        }
    }
}
