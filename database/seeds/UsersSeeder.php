<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'password' => Hash::make('reza123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Agung Palevi',
            'username' => 'agung123',
            'email' => 'agung@gmail.com',
            'password' => Hash::make('agung123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Andi Kurniawan',
            'username' => 'andi123',
            'email' => 'andi@gmail.com',
            'password' => Hash::make('andi123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Budi Doremi',
            'username' => 'budi123',
            'email' => 'budi@gmail.com',
            'password' => Hash::make('budi123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Fatimah Nur',
            'username' => 'fatimah123',
            'email' => 'fatimah@gmail.com',
            'password' => Hash::make('fatimah123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Aisyah Azz',
            'username' => 'aisyah123',
            'email' => 'aisyah@gmail.com',
            'password' => Hash::make('aisyah123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Nana Indri',
            'username' => 'nana123',
            'email' => 'nana@gmail.com',
            'password' => Hash::make('nana123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Pevita P',
            'username' => 'pevita123',
            'email' => 'pevita@gmail.com',
            'password' => Hash::make('pevita123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Dodi Hermansyah',
            'username' => 'dodi123',
            'email' => 'dodi@gmail.com',
            'password' => Hash::make('dodi123321'),
            'remember_token' => Str::random(10),
    	    ],
    	    [
            'role_id' => '2' ,
            'name' => 'Yoga Putra',
            'username' => 'yoga123',
            'email' => 'yoga@gmail.com',
            'password' => Hash::make('yoga123321'),
            'remember_token' => Str::random(10),
    	    ],
    ]);
    }
}
