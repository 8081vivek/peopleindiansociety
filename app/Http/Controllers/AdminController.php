<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_panel;
use App\Models\user_panel;
use App\Models\tree_panel;
use App\Models\review_panel;



class AdminController extends Controller
{

function dashboard(Request $r){
    if(session()->has('admin')){
        $email=$r->session()->get('admin');
        $data=admin_panel::where('email',$email)->orwhere('mobile',$email)->first();


  $user=user_panel::where('role','user')->count();
        $volenteer=user_panel::where('role','volunteer')->count();
        $tree=tree_panel::all()->count();
        $userData=user_panel::where('role','user')->get();
        $volenteerData=user_panel::where('role','volunteer')->get();
            $monthly = tree_panel::selectRaw("DATE_FORMAT(plantingDate,'%Y-%m') as label, COUNT(*) as total")
        ->groupBy('label')
        ->orderBy('label')
        ->get();

    // Quarterly (YYYY-Qn)
    $quarterly = tree_panel::selectRaw("CONCAT(YEAR(plantingDate), '-Q', QUARTER(plantingDate)) as label, COUNT(*) as total")
        ->groupBy('label')
        ->orderByRaw("YEAR(plantingDate), QUARTER(plantingDate)")
        ->get();

    // Yearly (YYYY)
    $yearly = tree_panel::selectRaw("YEAR(plantingDate) as label, COUNT(*) as total")
        ->groupBy('label')
        ->orderBy('label')
        ->get();

$byType = user_panel::selectRaw("role as label, COUNT(*) as total")
    ->groupBy('role')
    ->get();

$byRegion = user_panel::selectRaw("state as label, COUNT(*) as total")
    ->whereNotNull('state')
    ->where('state','!=','')
    ->groupBy('state')
    ->orderByDesc('total')
    ->limit(10)
    ->get();
    $reviews = review_panel::orderBy('id','desc')->paginate(10);
$totalReviews = review_panel::count();


        return view('admin_dashboard',compact('data','user','volenteer','tree','userData','volenteerData','monthly','quarterly','yearly','byRegion','byType','totalReviews','reviews'));    }
    else{
        return redirect('admin');
    }
}
// *****************************login user*******************************

 function login(Request $r){
$email=$r->email;
$password=$r->password;
$data=admin_panel::where('email',$email)->orwhere('mobile',$email)->first();

if($data){
    if($data->password===$password){

        $r->session()->put('admin',$email);
      return redirect('ad');
        }
        else{
            echo "password not found";
        }
}

 }



 function reviewAproved($id){
    $data=review_panel::where('id',$id)->first();
    $data->status="approved";
    $data->save();
    return redirect()->back()->with('success1','review Approved successfully');
 }


 function reviewDelete($id){
      $data=review_panel::where('id',$id)->first();
    $data->status="approved";
    $data->delete();
        return redirect()->back()->with('success','review Delete successfully');


 }
 
 function logout(){
    session()->forget('admin');
    return redirect('/Admin')->with('success', 'Logged out successfully');
 }



}
