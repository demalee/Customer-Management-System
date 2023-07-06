<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //total customers in Zed db
        $customerCount = Customer::count();

       //for optimization
        $customers = Customer::all(['firstname','lastname','email','address','created_at','phonenumber','id']);
        return view('welcome',compact('customerCount','customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //lets get inputted data
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phonenumber' => 'required|regex:/(254)[0-9]{9}/'


        ]);
        $customer = new Customer();
        $customer-> firstname=$request->get('firstname');
        $customer ->lastname=$request->get('lastname');
        $customer->email=$request->get('email');
        $customer->address= $request->get('address');
        $customer->phonenumber= $request->get('phonenumber');
        try {
            $customer->save();
            $customer = $request->get('firstname');
            $message = 'You have successfully added ' .''   . ''.   $customer. '.'.'   '.' to Zed Business';
            return redirect()->back()->with('success',$message);
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','we couldnt save Customer currently, please try again later');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        //
        $customer = Customer::where('email', $email)->firstOrFail();
        return view('zed_customer', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer,$id)
    {
        $customer= Customer::findorFail($id);
        return view('update_customer',compact('customer'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer,$id)
    {
        //
        $request->validate([
            'firstname' => 'required|max:255,'.$id,
            'lastname' => 'required|max:255',
        ]);
        $customer =  Customer::findOrFail($id);
        $customer->firstname = $request->get('firstname');
        $customer->lastname = $request->get('lastname');
//        return response()->json($customer);
        try {
            $customer->save();
            return redirect()->back()->with('success', ' Customer  Updated successfully');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','Error while adding Customer');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer,$id)
    {
        try {
        $customer = Customer::findorFail($id);
        $customer->delete();
        return redirect()->back()->with('success','Customer deleted successfully');
    }
        catch (\Exception $e) {
            return redirect()->back()->with('error','Error while deleting customer');

        }

    }
}
