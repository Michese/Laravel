<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\NewsCategory
 *
 * @property int $category_id
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereTitle($value)
 * @mixin \Eloquent
 */
class NewsCategory extends Model
{
    use HasFactory;
    protected $table = "news_category";
    protected $primaryKey = "category_id";

    public $timestamps = false;

    public function news()
    {
        return $this->HasMany(News::class, 'category_id', 'category_id');
    }
}
