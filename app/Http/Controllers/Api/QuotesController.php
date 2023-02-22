<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\KanyeWestService;
use Illuminate\Http\Response;

final class QuotesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): Response
    {
        return new Response(['quotes' => KanyeWestService::getQuotes()]);
    }
}
