<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feedback_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();
        for($i=0;$i<10;$i++)
        {
            $data[] = [
                'name' => $faker->jobTitle(),
                'comment' => $faker->text(100)
            ];
        }
        return $data;
    }
}
