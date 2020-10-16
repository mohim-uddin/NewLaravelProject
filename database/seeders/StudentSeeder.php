<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\student;
use Illuminate\Support\Facades\Hash;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
			student::create([
            'name'=>Str::random(10),
            'phone'=>Str::random(),
            'email'=>Str::random(10).'@gmail.com',
            'address'=>Str::random(110),
        ]);
      }

    }
}
