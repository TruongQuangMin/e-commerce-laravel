<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/proxy-rasa', function (Request $request) {
    $client = new \GuzzleHttp\Client();
    $response = $client->post('http://localhost:5005/webhooks/rest/webhook', [
        'json' => $request->all()
    ]);
    return response()->json(json_decode($response->getBody()->getContents()));
});
