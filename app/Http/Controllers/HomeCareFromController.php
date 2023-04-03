<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homecare;

class HomeCareFromController extends Controller
{

    public function storeHomeCareForm(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'phone' => 'required|digits:10|numeric',
        'email' =>'required|email',
        'Subject' => 'required',
        'Comments' => 'required',
    ]);

    $HomeCare=new Homecare;

    $HomeCare->name = $request->input('name');
    $HomeCare->phone = $request->input('phone') ;
    $HomeCare->email = $request->input('email');
    $HomeCare->Subject = $request->input('Subject');
    $HomeCare->Comments = $request->input('Comments');
    $HomeCare->save();


  return redirect()->back()->with(['success' =>'HomeCare Submit Successfully']);

}
}
