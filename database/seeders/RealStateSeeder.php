<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RealState;

class RealStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealState::create([
            'user_id'=>'2',
            'state_id'=>'1',
            'property_id'=>'1',
            'active'=>1,
            'category_id'=>'1'
        ]);
        RealState::create([
            'user_id'=>'3',
            'state_id'=>'2',
            'property_id'=>'1',
            'active'=>1,
            'category_id'=>'1'



        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'1',
            'property_id'=>'1',
            'active'=>1,
            'category_id'=>'1',


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'2',
            'property_id'=>'1',
            'active'=>1,
            'category_id'=>'2',
            'period_id'=>'2'


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'1',
            'property_id'=>'2',
            'category_id'=>'2',
            'period_id'=>'2'


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'1',
            'property_id'=>'2',
            'category_id'=>'3',


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'2',
            'property_id'=>'2',
            'active'=>1,
            'category_id'=>'4',


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'3',
            'property_id'=>'1',
            'category_id'=>'4',


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'1',
            'property_id'=>'1',
            'category_id'=>'4',
            'period_id'=>'1'


        ]);
        RealState::create([
            'user_id'=>'4',
            'state_id'=>'3',
            'property_id'=>'1',
            'category_id'=>'3',


        ]);
    }
}
