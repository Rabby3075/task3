<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
    public function dash(){
        return view('customer.dash');
    }

    public function userCreate(){
        return view('customer.registration');
    }

    public function userCreateSubmit(Request $request){

        $validate = $request->validate([
            "name"=>"required",
            'dob'=>'required|date',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'username'=>'required|min:5',
            'password'=>'required|min:8|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{5,20}$/',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg'
        ],
        ['password.regex'=>"Please use atleast 1 uppercase, 1 lowercase, 1 special charactee, 1 number"]
    );
    $rating = 0;
    $ErrorMsg = "User name doesn't exist";


    $userCheck = Customer::where('username',$request->username)->first();
    if($userCheck){

        return redirect()->back()->with('failed', 'Username already exist');
    }
    else{
      $image = $request->image;
      $nameImage = $image->getClientOriginalName();
      $path = $request->file('image')->storeAs('images',$nameImage,'public');


      $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->rating = $rating;
        $customer->image = $nameImage;
        $result = $customer->save();
        if($result){

            return redirect()->back()->with('success', 'Registration Done successfully');
        }
        else{
            return redirect()->back()->with('failed', 'Registration Failed');
        }
    }

    }

    public function userLoginSubmit(Request $request){
        $validate = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]
    );
    $loginCheck = Customer::where('username',$request->username)->where('password',$request->password)->first();
    if($loginCheck){
        $request->session()->put('name',$loginCheck->name);
        $request->session()->put('dob',$loginCheck->dob);
        $request->session()->put('phone',$loginCheck->phone);
        $request->session()->put('username',$loginCheck->username);
        $request->session()->put('email',$loginCheck->email);
        $request->session()->put('password',$loginCheck->password);
        $request->session()->put('image',$loginCheck->image);
        return  redirect()->route('userHome');
    }
    else{
        return redirect()->back()->with('failed', 'Invalid username or password');
    }
    }
    public function logout(){
        session()->forget('name');
        session()->forget('dob');
        session()->forget('phone');
        session()->forget('username');
        session()->forget('email');
        session()->forget('password');
        session()->forget('image');
        return redirect()->route('userLogin');
    }

    public function editProfile(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required",
            'dob'=>'required|date',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'username'=>'required|min:5',
        ]
    );
    $user = Customer::where('username',$request->session()->get('username'))->first();
    $user->name = $request->name;
    $request->session()->put('name',$request->name);
    $user->dob = $request->dob;
    $request->session()->put('dob',$request->dob);
    $user->email = $request->email;
    $request->session()->put('email',$request->email);
    $user->phone = $request->phone;
    $request->session()->put('phone',$request->phone);
    $user->username = $request->username;
    $request->session()->put('username',$request->username);
    $result = $user->save();
    if($result){

        return redirect()->back()->with('success', 'Registration Done successfully');
    }
    else{
        return redirect()->back()->with('failed', 'Registration Failed');
    }
    }


}
