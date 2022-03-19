<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phq9;
use App\Models\Gad7;
use Illuminate\Support\Facades\Auth;

class MentalHealthController extends Controller
{


    public function phq9()
    {
        return view('mentalhealth.phq9_form');
    }

    public function phq9controller(Request $request)
    {
        $new_data = new Phq9();
        $new_data->email = Auth::user()->email;
         $new_data->Q1 = $request->q1;
         $new_data->Q2 = $request->q2;
         $new_data->Q3 = $request->q3;
         $new_data->Q4 = $request->q4;
         $new_data->Q5 = $request->q5;
         $new_data->Q6 = $request->q6;
         $new_data->Q7 = $request->q7;
         $new_data->Q8 = $request->q8;
         $new_data->Q9 = $request->q9;

         $total = $new_data->Q1 +
         $new_data->Q2 +
         $new_data->Q3 +
         $new_data->Q4 +
         $new_data->Q5 +
         $new_data->Q6 +
         $new_data->Q7 +
         $new_data->Q8 +
         $new_data->Q9 ;

         $new_data ->Total = $total;

         $new_data->save();

         
           return view('mentalhealth.phq9view',compact('new_data'));
       

         
         




    }


    public function gad7()
    {
        return view('mentalhealth.gad7_form');
    }



    public function gad7controller(Request $request)
    {
        $new_data = new Gad7();
        $new_data->email = Auth::user()->email;
         $new_data->Q1 = $request->q1;
         $new_data->Q2 = $request->q2;
         $new_data->Q3 = $request->q3;
         $new_data->Q4 = $request->q4;
         $new_data->Q5 = $request->q5;
         $new_data->Q6 = $request->q6;
         $new_data->Q7 = $request->q7;
         

         $total = $new_data->Q1 +
         $new_data->Q2 +
         $new_data->Q3 +
         $new_data->Q4 +
         $new_data->Q5 +
         $new_data->Q6 +
         $new_data->Q7 ;
         

         $new_data ->Total = $total;

         $new_data->save();
         

         return view('mentalhealth.gad7view',compact('new_data'));


    }





}
