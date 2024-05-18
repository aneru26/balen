<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {


    Route::get('/caradmin', [CarController::class, "cars"])->name("caradmin");
   
    Route::post('/caradmin', [CarController::class, "storeCar"])->name("registerCaradmin");
    Route::post('/logout', [AuthController::class, "logout"])->name("logout");

    Route::get('/customerManagement', function (Request $request) {
        $query = Customer::query();
    
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
    
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }
    
        $customers = $query->get();
    
        return view('admin.customerMonitor', compact('customers'));
    })->name('customerManagement');
});


Route::post('/admin', [AuthController::class, "registerSave"])->name("registerDealear");


Route::get('/vehicles', [CarController::class, "dashboard"])->name("vehicles");

Route::post('/login', [AuthController::class, "loginAction"])->name("login");
Route::post('/registercustomer', [AuthController::class, "registercustomer"])->name("registercustomer");


Route::get('/targetcar/{id}', [CarController::class, "cardetial"])->name("cardetail");




Route::get('/', function () {
    $cars = DB::table('inventories')
        ->join('vehicles', 'inventories.vehicle_id', '=', 'vehicles.vehicle_id')
        ->join('users', 'vehicles.dealer_id', '=', 'users.id')
        ->join('mymodels', 'vehicles.mymodel_id', '=', 'mymodels.mymodel_id')
        ->join('options', 'mymodels.option_id', '=', 'options.option_id')
        ->join('brands', 'mymodels.brand_id', '=', 'brands.brand_id')
        ->select(
            "inventories.inventory_id",
            'mymodels.name as model_name',
            'mymodels.body_style',
            'vehicles.price',
            'vehicles.image',
            'options.color',
            'options.transmission',
            'options.engine',
            DB::raw('brands.name as brand_name'),

        )
        ->get();

        $users = User::where('name', '!=', 'superadmin')->take(3)->get();


    return view('welcome', compact("cars","users"));


})->name('home');

Route::get('/dealers', function () {

    $users = User::where('name', '!=', 'superadmin')->get();


    return view('pages.dealers',compact('users'));

})->name('dealers');


Route::get('/login', function () {
    return view('pages.login');
})->name('login');


Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');



// Route::get('/customerManagement', function() {

//     $customers = Customer::all();
//     return view('admin.customerMonitor',compact("customers"));
// });


Route::get('/customer', function () {
    return view('pages.customer');
})->name('customer');

Route::get('/thankyou', function () {
    return view('pages.thankyou');
})->name('thankyou');
