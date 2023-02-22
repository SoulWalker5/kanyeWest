<?php

namespace App\Services;

use Illuminate\Http\Client\Pool;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

final class KanyeWestService
{
    /**
     * @return array<string>
     */
    public static function getQuotes(int $quotes = 5): array
    {
        $responses = Http::pool(function (Pool $pool) use ($quotes) {
            for ($i = 0; $i < $quotes; $i++) {
                $pool->get('https://api.kanye.rest');
            }
        });

        return array_map(static fn ($response) => $response->throw()->object()?->quote, $responses);
    }

    /**
     * @throws RequestException
     */
    public static function getQuote(): string
    {
        return Http::get('https://api.kanye.rest')->throw()->object()?->quote;
    }
}
