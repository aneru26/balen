<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\MyModel;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CarController extends Controller
{
    //
    public function cars() {
        $models = MyModel::all();
        $dealers = User::all();
        

        return view('admin.caradmin',compact('models','dealers'));
        
    }


    public function storeCar(Request $request){

        
// Para maka store kag image
        if ($request->hasFile('image')) {
            // Upload image
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('carscontainer', $imageName, 'public'); // Adjust the storage path as needed
        }
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'model_id' => 'required',
        'dealer_id' => 'required',
        'price' => 'required',
    ]);

    // Generate a VIN (Vehicle Identification Number)
    $vin = $this->generateVin(); // Assuming generateVin() is a method to generate a unique VIN
   

   
    $createdCar = Vehicle::create([
        'vin' => $vin,
        'mymodel_id' => $request->model_id,
        'dealer_id' => $request->dealer_id,
        'price' => $request->price,
        'image' => $imageName, // Store the image file name instead of the file object
    ]);

    Inventory::create([
        "vehicle_id" => $createdCar->vehicle_id
    ]);

    return redirect()->route('caradmin');
    }


    
    

    private function generateVin() {
        // Generate a random string (assuming VIN format and length)
        return Str::random(17); // Adjust the length as needed based on VIN format
    }

    
    public function dashboard(){

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

            
        return view('pages.vehicles',compact("cars"));
    }



    public function cardetial($id){

        $car = DB::table('inventories')
    ->join('vehicles', 'inventories.vehicle_id', '=', 'vehicles.vehicle_id')
    ->join('mymodels', 'vehicles.mymodel_id', '=', 'mymodels.mymodel_id')
    ->join('options', 'mymodels.option_id', '=', 'options.option_id')
    ->join('brands', 'mymodels.brand_id', '=', 'brands.brand_id')
    ->select(
        "inventories.inventory_id",
        'mymodels.name as model_name',
        'mymodels.body_style',
        'vehicles.price',
        'vehicles.image',
        'vehicles.vin',
        'options.color',
        'options.transmission',
        'options.engine',
        'brands.brand_id',
        DB::raw('brands.name as brand_name')
    )
    ->where('inventories.inventory_id', $id)
    ->first(); // Use first() instead of get() if you expect only one result


    $cars_available = DB::table('inventories')
    ->join('vehicles', 'inventories.vehicle_id', '=', 'vehicles.vehicle_id')
    ->join('mymodels', 'vehicles.mymodel_id', '=', 'mymodels.mymodel_id')
    ->join('brands', 'mymodels.brand_id', '=', 'brands.brand_id')
    ->join('options', 'mymodels.option_id', '=', 'options.option_id')
    ->select(
        "inventories.inventory_id",
        'mymodels.name as model_name',
        'mymodels.body_style',
        'vehicles.price',
        'vehicles.image',
        'vehicles.vin',
        'options.color',
        'options.transmission',
        'options.engine',
        'brands.brand_id',
        DB::raw('brands.name as brand_name')
    )
    ->where('brands.brand_id', '=', $car->brand_id)
    ->where('inventories.inventory_id', '!=', $id)
    ->get(); // Use first() instead of get() if you expect only one result

    
    
 

    
        return view("pages.targetcar",compact('car','cars_available'));
    
    }





}
