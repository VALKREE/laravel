<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class upload_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upload_form')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();
        for($i=0;$i<10;$i++)
        {
            $data[] = [
                'name' => $faker->jobTitle(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'information' => $faker->text()
            ];
        }
        return $data;
    }
}
