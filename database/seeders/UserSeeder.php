<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'test1',
            'image'=>'avater.jpg',
            'password' =>'secret' ,
            'city'=>'Homs',
            'region'=>'jjjj',
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'text2',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',

            'password' =>'secret' ,
            'role' => 'owner',
        ]);
        User::create([
            'name' => 'test3',
            'image'=>'avater.jpg',
            'city'=>'Homs',
            'region'=>'jjjj',
            'password' =>'secret' ,
        ]);
        User::create([
            'name' => 'test4',
            'password' =>'secret' ,
            'city'=>'Daraa',
            'region'=>'gfd',
        ]);
        User::create([
            'name' => 'test5',
            'image'=>'avater.jpg',

            'password' =>'secret' ,
        ]);
        User::create([
            'name' => 'صاحب العقار',
            'image'=>'avater.jpg',
            'city'=>'lattakia',
            'region'=>'fff',
            'password' =>'secret' ,
            'role' => 'owner',
        ]);

    }
}