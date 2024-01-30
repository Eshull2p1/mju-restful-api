<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MajorSeeder;
use App\Models\MJUstudent;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MajorSeeder::class,
            // เพิ่ม seeders อื่น ๆ ตามต้องการ
            
        ]);
        MJUstudent::factory(50)->create();
    }
}

