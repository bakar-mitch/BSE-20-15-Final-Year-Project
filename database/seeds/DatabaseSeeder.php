<?php

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
         $this->call(SettingTableSeeder::class);
        //  $this->call(PermissionsTableSeeder::class);
        //  $this->call(RolesTableSeeder::class);
         $this->call(PermissionRoleTableSeeder::class);
        //  $this->call(RoleUserTableSeeder::class);
         $this->call(StatusesTableSeeder::class);
         $this->call(PrioritiesTableSeeder::class);
         $this->call(CouponSeeder::class);
         $this->call(CategoriiesTableSeeder::class);

    }
}
