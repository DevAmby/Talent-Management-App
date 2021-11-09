<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Experiences;

class ExperiencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    
    {
        $user = auth()->user();
       
        $experiences= Experiences::where('user_id', $user->id)->first();
        return view('experiences',compact('experiences'));

    }



    public function educationStore(Request $request){
        $user = auth()->user();
    
         if(1==1)
         {
           if (Experiences::where('user_id', $user->id)->first())
           {
           Experiences::where('user_id', $user->id)->update([
            'education_school' => $request->input('education_school'),
                'education_location' => $request->input('education_location'),
                'education_course' => $request->input('education_course'),
                'education_degree' => $request->input('education_degree'),
                'education_graduation' => $request->input('education_graduation'),
         
            ]);
    
            return redirect()->back()->with('done', ' Updated successfully');
       } 
    
    
       else {
            Experiences::create (['user_id' => $user->id,
            'education_school' => $request->input('education_school'),
                'education_location' => $request->input('education_location'),
                'education_course' => $request->input('education_course'),
                'education_degree' => $request->input('education_degree'),
                'education_graduation' => $request->input('education_graduation'),
       
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');
    
            }
    
    }
    
    }


    public function workStore(Request $request){
        $user = auth()->user();
    
         if(1==1)
         {
           if (Experiences::where('user_id', $user->id)->first())
           {
           Experiences::where('user_id', $user->id)->update([
            'work_facility' => $request->input('work_facility'),
                'work_start_date' => $request->input('work_start_date'),
                'work_end_date' => $request->input('work_end_date'),
                'work_street' => $request->input('work_street'),
                'work_city' => $request->input('work_city'),
                'work_postal' => $request->input('work_postal'),
                'work_job' => $request->input('work_job'),
                'work_unit' => $request->input('work_unit'),
                'work_unit_beds' => $request->input('work_unit_beds'),
                'work_patient' => $request->input('work_patient'),
         
            ]);
    
            return redirect()->back()->with('done', ' Updated successfully');
       } 
    
    
       else {
            Experiences::create (['user_id' => $user->id,
                'work_facility' => $request->input('work_facility'),
                'work_start_date' => $request->input('work_start_date'),
                'work_end_date' => $request->input('work_end_date'),
                'work_street' => $request->input('work_street'),
                'work_city' => $request->input('work_city'),
                'work_postal' => $request->input('work_postal'),
                'work_job' => $request->input('work_job'),
                'work_unit' => $request->input('work_unit'),
                'work_unit_beds' => $request->input('work_unit_beds'),
                'work_patient' => $request->input('work_patient'),
       
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');
    
            }
    
    }
    
    }


    public function resumeStore(Request $request){
        $user = auth()->user();
    
         if(1==1)
         {
           if (Experiences::where('user_id', $user->id)->first())
           {
           Experiences::where('user_id', $user->id)->update([
               
            // 'resume_image' => $request->input('resume_image'),
         
            ]);
    
            return redirect()->back()->with('done', ' Updated successfully');
       } 
    
    
       else {
            Experiences::create (['user_id' => $user->id,
            // 'resume_image' => $request->input('resume_image'),
    
            ]); 
            return redirect()->back()->with('failed', ' Updated not successful');
    
            }
    
    }
    
    }

}


