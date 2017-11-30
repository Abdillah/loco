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
    $mode = $request->input('mode');
    if ($request->has('price-range')) {
        $priceRange = explode(':', $request->input('price-range'));
    } else {
        $priceRange = [ 8000, 40000 ];
    }

    // Query database for foods
    $queries = Foodstuff::query();

    if ($mode === 'price') {
        $queries = $queries->where('price', '>', $priceRange[0])
        ->orWhere('price', '<', $priceRange[1])
        ->orderBy('price', 'ASC');
    } else if ($mode === 'relevance') {
        $queries = $queries->where('name', 'LIKE', "%$q%")
        ->where('name', 'LIKE', "%$q%");
    } else if ($mode === 'location') {
        $queries = $queries->where('price', '>', $priceRange[0])
        ->orWhere('price', '<', $priceRange[1]);
    }

    $foods = $queries->getModels();

    return view('search', [
        'searchMode' => $mode,
        'query' => $q,
        'foodstuffs' => $foods
    ]);
});

Route::get('/eatspot/{id}', function ($id) {
    $eatspot = Eatspot::find($id);
    return view('eatspot', [ 'eatspot' => $eatspot ]);
});
