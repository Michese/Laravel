<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')
            ->insert($this->generateNews());
    }

    private function generateNews()
    {
        $news = [];

        for ($count = 0; $count < 15; $count++) {
            $news[] = [
                'category_id' => random_int(1, 5),
                'title' => Str::random(10),
                'description' => Str::random(25),
                'content' => Str::random(100)
            ];
        }

        return $news;
    }
}
