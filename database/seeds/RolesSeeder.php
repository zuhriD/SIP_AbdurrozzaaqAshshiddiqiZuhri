<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //
         \DB::table('roles')->insert([
        	[
            'name' => 'admin',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'name' => 'user',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ]
    ]);
    }
}
