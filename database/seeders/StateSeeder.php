<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'state'=>'عظم'
        ]);
        State::create([
            'state'=>'مفروش'
        ]);
        State::create([
            'state'=>'تجهيز'
        ]);
    }
}
