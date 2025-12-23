<?php

namespace Database\Seeders;

use App\Models\ResearchField;
use Illuminate\Database\Seeder;

class ResearchFieldSeeder extends Seeder
{
    public function run()
    {
        $fields = [
            ['name' => 'Smart Cities / Village', 'is_active' => false],
            ['name' => 'Agriculture', 'is_active' => true],
            ['name' => 'Smart Transportation', 'is_active' => false],
        ];

        foreach ($fields as $field) {
            ResearchField::create($field);
        }
    }
}
