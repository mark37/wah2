<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
	    DB::table('users')->delete();

	    //Deafault Admin User for Initial Login
	    $users = array(
	            ['last_name' => 'admin', 'first_name' => 'admin', 'middle_name' => 'admin', 'birthdate' => '1989-07-23', 'gender' => 'M', 'role' => 'Admin', 
	            'is_admin' => 'Y', 'username' => 'admin', 'email' => 'admin@wah.ph', 'mobile_number' => '09257771423', 'is_active' => 'Y',
	    		'photo_url' => '', 'e_sign' => '', 'designation' => '', 'password' => Hash::make('secret')],
	    );
	        
	    
	    foreach ($users as $user)
	    {
	        User::create($user);
	    }  
	} 
}
