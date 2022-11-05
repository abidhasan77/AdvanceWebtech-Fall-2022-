<?php

namespace App\Http\Controllers;

use App\Models\TransportRegistration;
use App\Http\Requests\StoreTransportRegistrationRequest;
use App\Http\Requests\UpdateTransportRegistrationRequest;
use Illuminate\Http\Request;

class TransportRegistrationController extends Controller
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
     * @param  \App\Http\Requests\StoreTransportRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransportRegistrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransportRegistration  $transportRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(TransportRegistration $transportRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransportRegistration  $transportRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(TransportRegistration $transportRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransportRegistrationRequest  $request
     * @param  \App\Models\TransportRegistration  $transportRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransportRegistrationRequest $request, TransportRegistration $transportRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransportRegistration  $transportRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransportRegistration $transportRegistration)
    {
        //
    }
    
                        /**Controller Function/Logic */

     public function Registation()
        {
         return view('Registation');
        }
     
     public function Registationsubmit(Request $request){
            $rules= [
               'id' => 'required',
               'companyname'=> 'required|min:5|string:A-Z,a-z',
               'phone'=> 'required|numeric',
               'email' => 'required',
               'type' => 'required',
               'password'=> 'required|min:6',
               
           ];
           $messages= [
               'required'=> 'Please Fill-Up the Field',
               'companyname.min'=> 'Minimum 5 Character',
               'string'=> 'Name Should Be String',
               'numeric'=> 'The contact must be Numeric',
               'password.min' => 'Minimum 6 Character'
           ];
         
         $this->validate($request,$rules,$messages);
         
         
         
               $registration = new TransportRegistration();
               $registration->id= $request->id;
               $registration->companyname= $request->companyname;
               $registration->type= $request->type;
               $registration->phone= $request->phone;
               $registration->email= $request->email;
               $registration->password= $request->password;
               $registration->save();
               //return "ok";
               //redirect()->route('login');
               return view('login');
           }
        
        
           public function login(){
            return view('login');
          }
    
          public function loginSubmit(Request $request){
            $rules= [
               'email' => 'required',
               'password'=> 'required',
               
           ];
           $messages= [
               'required'=> 'Please Fill-Up the Field',
               'password.min' => 'Minimum 6 Character'
           ];
           $this->validate($request,$rules,$messages);
      
           $registration = TransportRegistration::where('email',$request->email)
                             ->where('password',$request->password)
                             ->first();
                
         // return $teacher;
    
         if($registration){
             $request->session()->put('user',$registration->companyname);
            return redirect()->route('Registation');
            //return '$name';
         }
         
         return back();
         }
    
       public function RegiDashBoard()
       {
        return view('RegistationDashBoard');
       }
       
       public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }


}
