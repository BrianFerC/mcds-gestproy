<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Project_UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Provider_ProjectController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TracingController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'welcome']);


Route::get('hellow', function () {
    return "<h1> Hello! MCDS =) <h1>";
});

Route::get('allusers', function () {
    $users = App\Models\User::take(5)->get();
    dd($users);
});


Route::get('showuser/{id}', function (Request $request) {
    $id = $request->id;
    $user = App\Models\User::find($id);
    return view('showuser')->with('user', $user);
});


Route::get('challenge', function () {

    foreach(App\Models\User::all()->take(10) as $user) {
        $years     = Carbon::createFromDate($user->birthdate)->diff()->format('%y years old');
        $since     = Carbon::parse($user->created_at);
        $results[] = $user->names . " - " . $years . " - created " . $since->diffForHumans() . "<br>";
    }
    dd($results);
});



  Route::get('viewusers', function () {
    $users = App\Models\User::all();
    return view('viewusers')->with('users', $users);

});

    Route::get('examples', function() {
            return view('examples');           


});            



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('locale/{locale}', [LocaleController::class, 'index']);
//Route::get('locale/{locale}', 'LocaleController@index');


Route::post('users/search', [UserController::class, 'search']);

Route::post('categories/search', [CategoryController::class, 'search']);

Route::post('projects_users/search', [Project_UserController::class, 'search']);

Route::post('projects/search', [ProjectController::class, 'search']);

Route::post('providers_projects/search', [Provider_ProjectController::class, 'search']);

Route::post('providers/search', [ProviderController::class, 'search']);

Route::post('tracings/search', [TracingController::class, 'search']);


// Export PDF
Route::get('export/users/pdf', [UserController::class, 'pdf']);

Route::get('export/users/excel', [UserController::class, 'excel']);
// Imports
Route::post('import/users/excel', [UserController::class, 'import']);

// Filter
Route::post('projectsbycat', [HomeController::class, 'projectsbycat']);


// Group Middleware
Route::group(['middleware' => 'admin'], function () {
    // Resources
Route::resources([
    'users'              => 'UserController',
    'categories'         => 'CategoryController',
    'projects_users'     => 'Project_UserController',
    'projects'           => 'ProjectController',
    'providers_projects' => 'Provider_ProjectController',
    'providers'          => 'ProviderController',
    'tracings'           => 'TracingController',

]);
});