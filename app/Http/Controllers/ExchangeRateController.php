<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class ExchangeRateController extends Controller
{
    public function addExchangeRates()
    {
        $data = json_decode(file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js'))->Valute;
        foreach ($data as $value) {
            dump($value);
            ExchangeRate::create([
                'num_code' => $value->NumCode,
                'char_code' => $value->CharCode,
                'nominal' => $value->Nominal,
                'name' => $value->Name,
                'value' => $value->Value,
                'previous' => $value->Previous,
            ]);
        }
    }
}
