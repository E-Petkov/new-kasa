<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class, 8)->create();
        $user=User::where('email', 'emil.petkov@rebusnetworks.com')->first();
        if(!$user){
            User::create([
                'name'=>'Emil Petkov',
                'email'=>'emil.petkov@rebusnetworks.com',
                'password'=>Hash::make('12341234'),
                'role'=>'admin',
                'remember_token'=>'NN6posCT8U',
                'created_at'=>now(),
                'updated_at'=>now(),
                'email_verified_at'=>now()
            ]);
        }
    }
}
