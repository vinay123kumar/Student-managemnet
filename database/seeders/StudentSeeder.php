<?php
use App\Models\Students;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Students::factory()->count(10)->create();
    }
    
}
