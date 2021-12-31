<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PersonalinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personalinfos')->insert([
            'full_name' => 'Pawan Bk',
            'profile'   => 'Developer',
            'email'     => 'shiwanbk@gmail.com',
            'phone'     => '9824526722',
            'profile_image' => 'default.png'
        ]);
    }
}
