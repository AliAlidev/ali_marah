<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name'=>'first',
            'phone'=>'0998765439',
            'city'=>'Damascus',
            'region'=>'Mazeh',
            'role'=>'lower'

        ]);
        Service::create([
            'name'=>'two',
            'phone'=>'0998765439',
            'city'=>'Damascus',
            'region'=>'Mazeh',
            'role'=>'engineer'

        ]);
        Service::create([
            'name'=>'three',
            'phone'=>'0998765439',
            'city'=>'Damascus',
            'region'=>'Mazeh',
            'role'=>'engineer'

        ]);
        Service::create([
            'name'=>'four',
            'phone'=>'0998765439',
            'city'=>'Damascus',
            'region'=>'Mazeh',
            'role'=>'lower'

        ]);
        Service::create([
            'name'=>'five',
            'phone'=>'0998765439',
            'city'=>'Damascus',
            'region'=>'Mazeh',
            'role'=>'engineer'

        ]);
    }
}
