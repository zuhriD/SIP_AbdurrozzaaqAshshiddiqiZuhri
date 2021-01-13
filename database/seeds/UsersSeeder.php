<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
        	[
            'role_id' => '1' ,
            'name' => 'Reza Palevi',
            'username' => 'reza123',
            'email' => 'reza@gmail.com',
            'password' => 'reza123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Agung Palevi',
            'username' => 'agung123',
            'email' => 'agung@gmail.com',
            'password' => 'agung123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Andi Kurniawan',
            'username' => 'andi123',
            'email' => 'andi@gmail.com',
            'password' => 'andi123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Budi Doremi',
            'username' => 'budi123',
            'email' => 'budi@gmail.com',
            'password' => 'budi123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Fatimah Nur',
            'username' => 'fatimah123',
            'email' => 'fatimah@gmail.com',
            'password' => 'fatimah123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Aisyah Azz',
            'username' => 'aisyah123',
            'email' => 'aisyah@gmail.com',
            'password' => 'aisyah123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Nana Indri',
            'username' => 'nana123',
            'email' => 'nana@gmail.com',
            'password' => 'nana123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Pevita P',
            'username' => 'pevita123',
            'email' => 'pevita@gmail.com',
            'password' => 'pevita123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Dodi Hermansyah',
            'username' => 'dodi123',
            'email' => 'dodi@gmail.com',
            'password' => 'dodi123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Yoga Putra',
            'username' => 'yoga123',
            'email' => 'yoga@gmail.com',
            'password' => 'yoga123321',
            'created_at' => date("Y-m-d"),
            'update_at' => date("Y-m-d")
    	    ],
    ]);
    }
}
