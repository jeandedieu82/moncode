<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'jean',
            'address' => 'cocody',
            'mobile' => '07573020',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Boah',
            'address' => 'angre',
            'mobile' => '09876543',
        ]);

        DB::table('contacts')->insert([
            'name' => 'kone',
            'address' => 'londre',
            'mobile' => '09876544567',
        ]);
    }
}
