<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();

        $now = Carbon::now();

        // Fixed UUIDs that match ProductSeeder
        $categories = [
            ['id' => '8f6950f7-0e90-4f7b-829d-800ec8e0a8b8', 'name' => 'CPU'],
            ['id' => '697d5475-7f0c-47d7-8b2c-ac49f822a9cd', 'name' => 'Motherboard'],
            ['id' => '334e7713-440a-47f5-b014-3af39f5574b7', 'name' => 'RAM'],
            ['id' => '7ec9384d-5fe0-4d37-8a43-376ece635514', 'name' => 'GPU'],
            ['id' => 'a1234567-89ab-cdef-0123-456789abcdef', 'name' => 'HDD - Storage'],
            ['id' => '6209eb9f-4d83-4478-ae4a-c57f64829292', 'name' => 'SSD - Storage'],
            ['id' => '043a90bf-c448-4f42-b7e1-f89c9d38f84e', 'name' => 'Power Supply'],
            ['id' => 'cc4fcbb2-e455-4935-ba89-76665586a897', 'name' => 'PC Case'],
        ];

        $data = array_map(function ($category) use ($now) {
            return array_merge($category, [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $categories);

        DB::table('categories')->insert($data);

        $this->command->info('Categories seeded successfully!');
    }
}
