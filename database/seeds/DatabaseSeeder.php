<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);


    //    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    //    DB::table('users')->truncate();
    //    DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    //    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    //    DB::table('profession')->truncate();
    //    DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->call(usersTableSeeder::class);
        $this->call(professionTableSeeder::class);
    }
}
