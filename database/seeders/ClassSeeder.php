<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassModel;

class ClassSeeder extends Seeder
{
    public function run()
    {
        ClassModel::create([
            'city' => 'Jakarta',
            'class' => 'Yoga',
            'session' => 'Morning',
            'name' => 'John Doe',
            'wa_number' => '08123456789',
            'email' => 'john.doe@example.com',
        ]);
    }
}
