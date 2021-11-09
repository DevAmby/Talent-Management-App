<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Preferences;

class PreferencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    
    {
        $user = auth()->user();
       
        $preferences= Preferences::where('user_id', $user->id)->first();
        return view('preferences',compact('preferences'));

    }


    public function workPreferenceStore(Request $request){
        $user = auth()->user();

         if(1==1)
         {
           if (Preferences::where('user_id', $user->id)->first())
           {
           Preferences::where('user_id', $user->id)->update([
            'Work_preference_date' => $request->input('Work_preference_date'),
            'work_preference_position' => $request->input('work_preference_position'),
            

            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 

       else {
            Preferences::create (['user_id' => $user->id,
            'Work_preference_date' => $request->input('Work_preference_date'),
            'work_preference_position' => $request->input('work_preference_position'),
               
            ]); 
            return redirect()->back()->with('failed', ' Update not successful');

    }
   
}

    }


    
    public function workLocationStore(Request $request){
        $user = auth()->user();

         if(1==1)
         {
           if (Preferences::where('user_id', $user->id)->first())
           {
           Preferences::where('user_id', $user->id)->update([
            'work_locations' => $request->input('work_locations'),
        
            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 


       else {
            Preferences::create (['user_id' => $user->id,
            'work_locations' => $request->input('work_locations'),
           
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');

            }
   
    }

}




public function notificationStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Preferences::where('user_id', $user->id)->first())
       {
       Preferences::where('user_id', $user->id)->update([
        'preference_notification' => $request->input('preference_notification'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Preferences::create (['user_id' => $user->id,
        'preference_notification' => $request->input('preference_notification'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}
}
