<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsModel extends Model
{
    use HasFactory;

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
