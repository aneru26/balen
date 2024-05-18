<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //

    public function registerSave(Request $request)
    {


      

        Validator::make($request->all(), [
            'name' =>  'required',
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();


        if ($request->hasFile('image')) {
            // Upload image
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('dealercontainer', $imageName, 'public'); // Adjust the storage path as needed
        
        }


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imageName,
        ]);


        return redirect()->route('admin');
    }


    // login authentication
    public function loginAction(Request $request)
    {



        Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('home');
    }




    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        return redirect('/');
    }




    public function registercustomer(Request $request)
    {


        Validator::make($request->all(), [
            'name' =>  'required',
            'address' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'annual_income' => 'required',
        ])->validate();




        Customer::create([
            'name' =>  $request->name,
            'address' => $request->address,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'annual_income' => $request->annual_income,
        ]);


        return redirect()->route('thankyou');
    }
}
