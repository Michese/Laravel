<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ExchangeRate
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate newQuery()
 * @method static \Illuminate\Database\Query\Builder|ExchangeRate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate query()
 * @method static \Illuminate\Database\Query\Builder|ExchangeRate withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ExchangeRate withoutTrashed()
 * @mixin \Eloquent
 */
class ExchangeRate extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='exchange_rates';
    protected $primaryKey='exchange_rate_id';
    protected $fillable= [
            'num_code',
            'char_code',
            'nominal',
            'name',
            'value',
            'previous',
    ];

}
