<?php
use Illuminate\Http\Request;
use App\Models\Eatspot;
use App\Models\Foodstuff;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $mode = $request->input('mode');
    return view('home', [ 'searchMode' => $mode ]);
});

Route::get('/search', function (Request $request) {
    $q = $request->input('q');

    // Query database for foods
    $foods = Foodstuff::where('name', 'LIKE', "%$q%")
        ->orWhere('description', 'LIKE', "%$q%");

    return view('search', [ 'foodstuffs' => $foods ]);
});

Route::get('/eatspot/{id}', function ($id) {
    $eatspot = Eatspot::find($id);
    return view('eatspot', [ 'eatspot' => $eatspot ]);
});
