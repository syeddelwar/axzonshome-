<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cdpap;
class CdpapFromController extends Controller
{

    public function storeCdpapForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|digits:10|numeric',
            'email' => 'required|email',
            'patient' => 'required',
            'medicaid' => 'required',
            'joinmedicate' => 'required',
        ]);


        // $input = $request->all();
        
        // Cdpap::insert($input);

          $cdpap=new Cdpap ;

          $cdpap->first_name = $request->input('first_name');
          $cdpap->last_name = $request->input('last_name');
          $cdpap->phone = $request->input('phone') ;
          $cdpap->email = $request->input('email');
          $cdpap->patient = $request->input('patient');
          $cdpap->medicaid = $request->input('medicaid');
          $cdpap->joinmedicate = $request->input('joinmedicate');
          
          $cdpap->save();


        return redirect()->back()->with(['success' => 'Cdpap Submit Successfully']);
    }
    
}
