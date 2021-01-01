<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class newsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_category')
            ->insert($this->generateNewsCategory());
    }


    private function generateNewsCategory() {
        $newsCategory = [];

        for ($count =0; $count<5;$count++)
        {
            $str = Str::random(10);
            $newsCategory[] = [
                'title' => $str . uniqid()
            ];
        }
        return $newsCategory;
    }
}
