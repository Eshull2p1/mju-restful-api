<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MJUstudent; 

class MJUstudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                
        // สร้าง records โดยใช้ factory
        MJUstudent::factory(50)->create();
    }
}
