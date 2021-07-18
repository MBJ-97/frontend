<?php

namespace App\Http\Controllers;

use App\Business;
use App\businessuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class BusinessController extends Controller
{
    public function create_business() {

        return view('business/create');

    }

    public function dashboard() {

        return view('business/dashboard');

    }

    public function store_business(Request $req) {

        $req->validate([
            'name' => 'required|unique:Business',
            'description' => 'required',
            'category' =>'required',
            'subcat' =>'required',
            'wilaya' =>'required',
            'commune' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'email' =>'required|unique:Business',
        ]);

        $business = new Business();

        $business->name = request('name');
        $business->description = request('description');
        $business->category = request('category');
        $business->subCat = request('subcat');
        $business->wilaya = request('wilaya');
        $business->commune = request('commune');
        $business->address = request('address');
        $business->gmapsLink = request('gmaps');
        $business->phone = request('phone');
        $business->email = request('email');
        $business->facebook = request('facebook');
        $business->instagram = request('instagram');
        $business->website = request('website');


        $business->save();
        $id = $business->id;

        session(['businessId' => $id]);

        return redirect('/signupbusiness');

    }

    public function signup_business() {

            return view('business/signup');

    }

    public function processs_signup(Request $req) {

        $req->validate([
            'email' => 'required|unique:businessuser',
            'password' => 'required|min:8'
        ]);

        $businessID = new businessuser();

        $id = session('businessId');

        $businessID->business_id = $id; // session goes here retrieve the id
        $businessID->email = request('email');
        $businessID->password = Hash::make(request('password'));

        $authBiz = Business::find($id);
        $authBiz->update(['isAuth' => true]); //check that this business has an owner

        $businessID->save();


        return redirect('/signupsuccess');

    }

    public function signup_success() {
        return view('business/success');
    }

}
