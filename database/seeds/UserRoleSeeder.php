<?php

use Domain\User\Role\Role;
use Domain\User\Role\RoleName;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        foreach (RoleName::getConstantValues() as $roleName) {
            factory(Role::class, 1)->states($roleName)
                ->create();
        }
    }
}
