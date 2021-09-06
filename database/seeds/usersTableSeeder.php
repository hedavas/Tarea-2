<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	 DB::table('users')->insert([

    	 'name' => 'patricio',
    	 'email' => 'patrick@gmail.com',
    	 'password' => bcrypt('he34123'),
    	 'profession_id' => '9'
    	 ]);

    }
}
