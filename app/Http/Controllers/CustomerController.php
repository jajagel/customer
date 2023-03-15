<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);

    } 
    public function delete($id){
        $delete=DB::table("customers")
        ->where("id","=",$id )
        ->delete();
        return redirect('/')->with('deleted','Customer deleted successfully.');
    }

    public function store(Request $req){
        //dd($req);
        $validated=$req->validate([
            "firstName"=>['required'],
            "lastName"=>['required'],
            "email"=>['required','email'],
            "contactNumber"=>['required'],
            "address"=>['required'],
        ]);

        $customer=Customer::create($validated);

        return redirect()->back()->with('success','Customer Added Successfully');

    }
    
}
