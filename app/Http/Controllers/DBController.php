<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBController extends Controller
{
    public function index() {
//        $sql = "
//            create table news(
//                id bigint unsigned not null primary key auto_increment,
//                title varchar(255) not null unique,
//                description varchar(511),
//                content text
//            )
//        ";

        $sql = "drop table news";
        $result = DB::statement($sql);
        dd($result);
    }
}
