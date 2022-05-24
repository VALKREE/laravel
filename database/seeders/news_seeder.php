<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class news_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();
        for($i=0;$i<10;$i++)
        {
            $data[] = [
                'title' => $faker->jobTitle(),
                'description' => $faker->text(100),
                'author' => $faker->name()
            ];
        }
        return $data;
    }
}
