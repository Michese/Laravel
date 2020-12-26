<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
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

    public function index()
    {
        return view('news')
            ->with('isNews', true)
            ->with('news', $this->news);
    }

    public function item($id)
    {
        return view('new')
            ->with('new', $this->news[$id]);
    }

    public function addNews()
    {
        //
    }
}
