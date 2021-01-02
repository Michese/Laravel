<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\News
 *
 * @property int $news_id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @mixin \Eloquent\
 */
class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "news";
    protected $primaryKey = "news_id";
    protected $forceDeleting = false;

    protected $fillable = [
        "category_id",
        "title",
        "description",
        "content"
    ];

    public function getNewsByCategoryId(int $id) {
        return self::query()
            ->whereCategoryId($id)
            ->get();
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id', 'category_id');
    }

    public function deleteNewById(int $id)
    {
        return self::find($id)
            ->delete();
    }

    public function addNew(array $array) {
        return self::fill([
            "category_id" => $array["category"],
            "title" => $array["title"],
            "description" => $array["description"],
            "content" => $array["content"]
        ])
            ->save();
    }
}
