<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sitesettings')->insert([
            'hero_img' => 'default.png',
            'title'    => 'Hi, I am Pawan bk',
            'sub_title' => 'A beginner web designer and developer',
            'resume'     => '1640510958.pdf',
            'about_desc1' => 'i am a beginner web developer i have basic knowledge of javascript, php, laravel framework, html and css.'

        ]);
    }
}
