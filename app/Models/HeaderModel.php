<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HeaderModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderModel query()
 * @mixin \Eloquent
 */
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
//        'Войти' =>[
//            'title' => 'Войти',
//            'alias' => 'auth::index',
//            'isActive' => false
//        ],
    ];

    public function getMenu()
    {
        return $this->menu;
    }
}
