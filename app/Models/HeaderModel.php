<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderModel extends Model
{
    use HasFactory;

    private $menu = [
        'Главная' => [
            'title' => 'Главная',
            'alias' => 'index',
            'isActive' => false
        ],
        'О нас' => [
            'title' => 'О нас',
            'alias' => 'about',
            'isActive' => false
        ],
        'Новости' => [
            'title' => 'Новости',
            'alias' => 'news::category',
            'isActive' => false
        ],
        'Добавить новость' =>[
            'title' => 'Добавить новость',
            'alias' => 'admin::news::createView',
            'isActive' => false
        ],
        'Войти' =>[
            'title' => 'Войти',
            'alias' => 'auth::index',
            'isActive' => false
        ],
    ];

    public function getMenu()
    {
        return $this->menu;
    }
}
