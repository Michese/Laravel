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
 * @property int $exchange_rate_id
 * @property string $num_code
 * @property string $char_code
 * @property int $nominal
 * @property string $name
 * @property string $value
 * @property string $previous
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereCharCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereExchangeRateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereNominal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereNumCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate wherePrevious($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereValue($value)
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
