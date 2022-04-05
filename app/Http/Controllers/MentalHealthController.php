<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phq9;
use App\Models\Gad7;
use App\Models\Ptsd;
use App\Models\Bipolar;


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

    public function ptsd()
    {
        return view('mentalhealth.ptsd_form');
    }

    public function ptsdcontroller(Request $request)
    {
        $new_data = new Ptsd();
        $new_data->email = Auth::user()->email;
         $new_data->Q1 = $request->q1;
         $new_data->Q2 = $request->q2;
         $new_data->Q3 = $request->q3;
         $new_data->Q4 = $request->q4;
         $new_data->Q5 = $request->q5;
         
         

         $total = $new_data->Q1 +
         $new_data->Q2 +
         $new_data->Q3 +
         $new_data->Q4 +
         $new_data->Q5 ;
         
         

         $new_data ->Total = $total;

         $new_data->save();
         

         return view('mentalhealth.ptsdview',compact('new_data'));


    }

    public function bipolart()
    {
        return view('mentalhealth.bipolar_form');
    }



    public function bipoartcontroller(Request $request)
    {
        $new_data = new Bipolar();
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
         $new_data->Q10 = $request->q10;
         $new_data->Q11 = $request->q11;
         $new_data->Q12 = $request->q12;
         $new_data->Q13 = $request->q13;
         $new_data->Q14 = $request->q14;
         $new_data->Q15 = $request->q15;
         
         
         

         $total = $new_data->Q1 +
         $new_data->Q2 +
         $new_data->Q3 +
         $new_data->Q4 +
         $new_data->Q5 +
         $new_data->Q6 +
         $new_data->Q7 +
         $new_data->Q8 +
         $new_data->Q9 +
         $new_data->Q10 +
         $new_data->Q11 +
         $new_data->Q12 +
         $new_data->Q13 ;


         if($total>=7)
         {
             if($new_data->Q14==1)
             {
                 if($new_data->Q15==2 or $new_data->Q15==3)
                 {
                     $new_data->Result = 1;

                 }
                 else{
                    $new_data->Result = 0;
                 }
             }

             else{
                $new_data->Result = 0;
             }



         }else{
            $new_data->Result = 0;
         }


         
         

         

         $new_data->save();
         

         return view('mentalhealth.bipolar_view',compact('new_data'));


    }



    public function result(){

        
         $phq9result =   Phq9::where('email', Auth::user()->email)->get();
         $gad7result =   Gad7::where('email', Auth::user()->email)->get();
         $ptsdresult =   Ptsd::where('email', Auth::user()->email)->get();
         $bipolarresult =   Bipolar::where('email', Auth::user()->email)->get();

         


         return view('mentalhealth.resultview',compact('gad7result','phq9result','ptsdresult','bipolarresult'));


    }

    





}
