<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Credentials;
use Illuminate\Support\Facades\Storage;
use DB;

class CredentialsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    
    {
        $user = auth()->user();
       
        $credentials= Credentials::where('user_id', $user->id)->first();
        return view('credentials',compact('credentials'));

    }


    public function licensesStore(Request $request){
        $user = auth()->user();


        $credentials= Credentials::where('user_id', $user->id)->first();

        // Handle File Upload
        if($request->hasFile('licenses_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('licenses_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('licenses_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('licenses_image')->storeAs('public/licenses_images', $fileNameToStore);

            // Delete file if exists
            Storage::delete('public/licenses_images/'.$credentials->licenses_image);
	
		
        } 
        else {
            $fileNameToStore = 'noimage.jpg';
        }


         if(1==1)
         {

            $credentials= Credentials::where('user_id', $user->id)->first();
            
            if($request->hasFile('licenses_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('licenses_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('licenses_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('licenses_image')->storeAs('public/licenses_images', $fileNameToStore);
                // Delete file if exists
                Storage::delete('public/licenses_images/'. $credentials->licenses_image);
            
        
            
           if ($credentials)
           {
           Credentials::where('user_id', $user->id)->update([
            'licenses_license' => $request->input('licenses_license'),
            'licenses_state' => $request->input('licenses_state'),
            'licenses_expiration' => $request->input('licenses_expiration'),
            'licenses_number' => $request->input('licenses_number'),
            'licenses_image' => $fileNameToStore
            

            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 

    }

       else {
            Credentials::create (['user_id' => $user->id,
            'licenses_license' => $request->input('licenses_license'),
            'licenses_state' => $request->input('licenses_state'),
            'licenses_expiration' => $request->input('licenses_expiration'),
            'licenses_number' => $request->input('licenses_number'),
            'licenses_image' => $fileNameToStore
               
            ]); 
            return redirect()->back()->with('failed', ' Update not successful');

    }
   
    }

}


    
    public function clientStore(Request $request){
        $user = auth()->user();

         if(1==1)
         {
           if (Credentials::where('user_id', $user->id)->first())
           {
           Credentials::where('user_id', $user->id)->update([
            'client_certification' => $request->input('client_certification'),
            'client_expiration' => $request->input('client_expiration'),
            'client_number' => $request->input('client_number'),
            // 'client_image' => $request->input('client_image'),
            
               
        
            ]);

            return redirect()->back()->with('done', ' Updated successfully');
       } 


       else {
            Credentials::create (['user_id' => $user->id,
            'client_certification' => $request->input('client_certification'),
            'client_expiration' => $request->input('client_expiration'),
            'client_number' => $request->input('client_number'),
            // 'client_image' => $request->input('client_image'),
            
               
           
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');

            }
   
    }

}




public function employmentStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'employment_license' => $request->input('employment_license'),
            'employment_state' => $request->input('employment_state'),
            'employment_expiration' => $request->input('employment_expiration'),
            'employment_number' => $request->input('employment_number'),
            // 'employment_image' => $request->input('employment_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'employment_license' => $request->input('employment_license'),
            'employment_state' => $request->input('employment_state'),
            'employment_expiration' => $request->input('employment_expiration'),
            'employment_number' => $request->input('employment_number'),
            // 'employment_image' => $request->input('employment_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}


public function certificationsStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'certifications_license' => $request->input('certifications_license'),
            'certifications_state' => $request->input('certifications_state'),
            'certifications_expiration' => $request->input('certifications_expiration'),
            'certifications_number' => $request->input('certifications_number'),
            // 'certifications_image' => $request->input('certifications_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'certifications_license' => $request->input('certifications_license'),
            'certifications_state' => $request->input('certifications_state'),
            'certifications_expiration' => $request->input('certifications_expiration'),
            'certifications_number' => $request->input('certifications_number'),
            // 'certifications_image' => $request->input('certifications_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}

public function medicalStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'medical_license' => $request->input('medical_license'),
            'medical_state' => $request->input('medical_state'),
            'medical_expiration' => $request->input('medical_expiration'),
            'medical_number' => $request->input('medical_number'),
            // 'medical_image' => $request->input('medical_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'medical_license' => $request->input('medical_license'),
            'medical_state' => $request->input('medical_state'),
            'medical_expiration' => $request->input('medical_expiration'),
            'medical_number' => $request->input('medical_number'),
            // 'medical_image' => $request->input('medical_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}

public function trainingStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'training_license' => $request->input('training_license'),
            'training_state' => $request->input('training_state'),
            'training_expiration' => $request->input('training_expiration'),
            'training_number' => $request->input('training_number'),
            // 'training_image' => $request->input('training_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'training_license' => $request->input('training_license'),
            'training_state' => $request->input('training_state'),
            'training_expiration' => $request->input('training_expiration'),
            'training_number' => $request->input('training_number'),
            // 'training_image' => $request->input('training_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}

public function additionalStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'additional_license' => $request->input('additional_license'),
            'additional_state' => $request->input('additional_state'),
            'additional_expiration' => $request->input('additional_expiration'),
            'additional_number' => $request->input('additional_number'),
            // 'additional_image' => $request->input('additional_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'additional_license' => $request->input('additional_license'),
            'additional_state' => $request->input('additional_state'),
            'additional_expiration' => $request->input('additional_expiration'),
            'additional_number' => $request->input('additional_number'),
            // 'additional_image' => $request->input('additional_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}

public function backgroundStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'background_license' => $request->input('background_license'),
            'background_state' => $request->input('background_state'),
            'background_expiration' => $request->input('background_expiration'),
            'background_number' => $request->input('background_number'),
            // 'background_image' => $request->input('background_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'background_license' => $request->input('background_license'),
            'background_state' => $request->input('background_state'),
            'background_expiration' => $request->input('background_expiration'),
            'background_number' => $request->input('background_number'),
            // 'background_image' => $request->input('background_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}

public function hrStore(Request $request){
    $user = auth()->user();

     if(1==1)
     {
       if (Credentials::where('user_id', $user->id)->first())
       {
       Credentials::where('user_id', $user->id)->update([
        'hr_license' => $request->input('hr_license'),
            'hr_state' => $request->input('hr_state'),
            'hr_expiration' => $request->input('hr_expiration'),
            'hr_number' => $request->input('hr_number'),
            // 'hr_image' => $request->input('hr_image'),
     
        ]);

        return redirect()->back()->with('done', ' Updated successfully');
   } 


   else {
        Credentials::create (['user_id' => $user->id,
        'hr_license' => $request->input('hr_license'),
            'hr_state' => $request->input('hr_state'),
            'hr_expiration' => $request->input('hr_expiration'),
            'hr_number' => $request->input('hr_number'),
            // 'hr_image' => $request->input('hr_image'),
   
        ]); 
        return redirect()->back()->with('failed', ' Updated not successful');

        }

}

}
}
