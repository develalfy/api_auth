<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    $organizations = \Illuminate\Support\Facades\DB::table('organizations')
        ->select(['organization_id', 'name', 'created_at'])
        ->get();
    return response()->json(['organizations' => $organizations]);
});
