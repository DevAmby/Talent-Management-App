<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    
    {
        $user = auth()->user();
       
        $personal= Personal::where('user_id', $user->id)->first();
        return view('profiles',compact('personal'));

    }


    public function contactStore(Request $request){
        $user = auth()->user();

         if(1==1)
         {
           if (Personal::where('user_id', $user->id)->first())
           {
           Personal::where('user_id', $user->id)->update([
               'contact_name' => $request->input('contact_name'),
               'contact_email' => $request->input('contact_email'),
               'contact_phone' => $request->input('contact_phone'),
            
            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 
       else {
            Personal::create (['user_id' => $user->id,
            'contact_name' => $request->input('contact_name'),
               'contact_email' => $request->input('contact_email'),
               'contact_phone' => $request->input('contact_phone'),
            
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');

    }
   
}

    }



    
    public function addressStore(Request $request){
        $user = auth()->user();

         if(1==1)
         {
           if (Personal::where('user_id', $user->id)->first())
           {
           Personal::where('user_id', $user->id)->update([
            'address_street' => $request->input('address_street'),
            'address_city' => $request->input('address_city'),
            'address_country' => $request->input('address_country'),
            'address_zip' => $request->input('address_zip')

               
            
            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 
       else {
            Personal::create (['user_id' => $user->id,
            'address_street' => $request->input('address_street'),
               'address_city' => $request->input('address_city'),
               'address_country' => $request->input('address_country'),
               'address_zip' => $request->input('address_zip')
            
            ]); 
            return redirect()->back()->with('failed', ' Update not successful');

    }
   
}

    }


    
    public function emergencyStore(Request $request){
        $user = auth()->user();

         if(1==1)
         {
           if (Personal::where('user_id', $user->id)->first())
           {
           Personal::where('user_id', $user->id)->update([
            'emergency_name' => $request->input('emergency_name'),
            'emergency_number' => $request->input('emergency_number'),
            'emergency_relationship' => $request->input('emergency_relationship')
         
            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 


       else {
            Personal::create (['user_id' => $user->id,
            'emergency_name' => $request->input('emergency_name'),
            'emergency_number' => $request->input('emergency_number'),
            'emergency_relationship' => $request->input('emergency_relationship')
            
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');

            }
   
    }

}




public function referralStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Personal::where('user_id', $user->id)->first())
       {
       Personal::where('user_id', $user->id)->update([
        'referral_source' => $request->input('referral_source'),
        'referral_name' => $request->input('referral_name')
       
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Personal::create (['user_id' => $user->id,
        'referral_source' => $request->input('referral_source'),
        'referral_name' => $request->input('referral_name')
        
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}

}

