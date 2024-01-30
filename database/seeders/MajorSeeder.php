<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Major;
class MajorSeeder extends Seeder
{   

    public function run(): void
    {
        // สร้าง records โดยใช้ factory
        Major::factory(10)->create();
    }
}
