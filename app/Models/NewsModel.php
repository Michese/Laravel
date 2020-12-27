<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsModel extends Model
{
    use HasFactory;
    private $news = [
        [
            'title' => 'title1',
            'content_short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nesciunt sunt! Cum deserunt inventore iure libero maiores odit quaerat similique!',
            'content_long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias asperiores, blanditiis dolorum harum iusto porro praesentium quaerat reprehenderit veritatis. Alias beatae culpa dolorem eveniet expedita laboriosam laudantium maxime minus, neque non porro, quas quia quo quod ratione repellendus reprehenderit sequi sint ullam, voluptatibus. Ad amet dolore nisi vel voluptatum.'
        ],
        [
            'title' => 'title2',
            'content_short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nesciunt sunt! Cum deserunt inventore iure libero maiores odit quaerat similique!',
            'content_long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias asperiores, blanditiis dolorum harum iusto porro praesentium quaerat reprehenderit veritatis. Alias beatae culpa dolorem eveniet expedita laboriosam laudantium maxime minus, neque non porro, quas quia quo quod ratione repellendus reprehenderit sequi sint ullam, voluptatibus. Ad amet dolore nisi vel voluptatum.'
        ],
        [
            'title' => 'title3',
            'content_short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nesciunt sunt! Cum deserunt inventore iure libero maiores odit quaerat similique!',
            'content_long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias asperiores, blanditiis dolorum harum iusto porro praesentium quaerat reprehenderit veritatis. Alias beatae culpa dolorem eveniet expedita laboriosam laudantium maxime minus, neque non porro, quas quia quo quod ratione repellendus reprehenderit sequi sint ullam, voluptatibus. Ad amet dolore nisi vel voluptatum.'
        ]
    ];

    public function getNewById(int $id) {
        $result = DB::table('news')
            ->where('news_id', '=', $id)
            ->get();

        $result = json_decode(json_encode($result), true);
        return $result[0];
    }

    public function getNewsByCategoryId(int $id) {
        $result = DB::table('news')
            ->where('category_id', '=', $id)
            ->get();

        $result = json_decode(json_encode($result), true);
        return $result;
    }

    public function getAllNewsCategory() {
        $result = DB::table('news')
            ->get();
        $result = json_decode(json_encode($result), true);
        return $result;
    }
}
