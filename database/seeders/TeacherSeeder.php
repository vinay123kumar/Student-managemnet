<?php
use App\Models\Teachers;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        Teachers::factory()->count(5)->create();
    }
}
