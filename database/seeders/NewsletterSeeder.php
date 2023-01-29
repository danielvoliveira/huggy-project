<?php

namespace Database\Seeders;

use App\Models\Newsletter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsletter::create([
            'name' => 'Daniel Oliveira',
            'email' => 'danielvitol@hotmail.com',
        ]);

        Newsletter::create([
            'name' => 'Isabelle Cristina Taborda',
            'email' => 'isabelle@hotmail.com',
        ]);
    }
}
