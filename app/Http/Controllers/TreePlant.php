<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tree_panel;
use App\Models\treeupdate_panel;
use App\Models\user_panel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TreePlant extends Controller{

function myplant(Request $r){
       $email=$r->session()->get('user');
      $data=user_panel::where('email',$email)->first();
      $data1=tree_panel::where('user_id',$data->id)->get();
      $data2=tree_panel::where('user_id',$data->id)->count();
                        $data4=user_panel::where('role','user')->count();

      return view('umytrees',compact('data','data1','data2','data4'));
}



function treeForm(request $r){
    $email=$r->session()->get('user');
    $data=user_panel::where('email',$email)->first();
   return view('tree_plant',compact('data'));
} 

  



public function treePlantform(Request $r)
{
    $pic = $r->file('photoUpload');
    $picName =$pic->getClientOriginalName();
    $pic->move(public_path('image/'), $picName);

    // ✅ Save Tree Data
    $data = new tree_panel();
    $data->user_id      = $r->user_id;
    $data->treeName     = $r->treeType;
    $data->plantingDate = $r->plantingDate;
    $data->height       = $r->height;
    $data->age          = $r->age;
    $data->health       = $r->health;
    $data->latitude     = $r->latitude;
    $data->longitude    = $r->longitude;
    $data->village      = $r->village;
    $data->city         = $r->city;
    $data->state        = $r->state;
    $data->country      = $r->country;
    $data->pic          = $picName;
    $data->save();

    // ✅ Count Trees
    $treeCount = tree_panel::where('user_id', $r->user_id)->count();

    // ✅ Same logic: only on 10th tree
    if ($treeCount == 10) {

        $user = user_panel::where('id', $r->user_id)->first();

        // ✅ If user exists
        if ($user) {

            // ✅ Role update (only if not volunteer)
            if ($user->role != 'volunteer') {
                $user->role = 'volunteer';
                $user->save();
            }

            // ✅ Email Content
            $subject = "Congratulations! You Are Now a Volunteer 🌱";

            $messageBody =
                "Dear {$user->name},\n\n"
                ."Warm congratulations to you! 🎉\n\n"
                ."We are truly proud of your incredible contribution to nature.\n"
                ."By planting 10 trees, you have taken a powerful step toward a greener and healthier planet 🌍.\n\n"
                ."Because of your dedication and commitment, you have now been promoted to the role of VOLUNTEER. 🌿\n"
                ."Your efforts inspire others to take action and make a difference.\n\n"
                ."Thank you for being a true guardian of nature.\n\n"
                ."With gratitude,\n"
                ."Team Green Earth 🌳";

            // ✅ Send Mail (try-catch so tree save never fails)
            try {
                Mail::raw($messageBody, function ($mail) use ($user, $subject) {
                    $mail->to($user->email)->subject($subject);
                });
            } catch (\Exception $e) {
                // optional: log error
                // \Log::error("Volunteer mail failed: " . $e->getMessage());
            }
        }
    }

    return redirect('mytrees')->with('success', 'Tree registered successfully 🌱');
}


public function TreeProgress($id)
{
    $tree = tree_panel::find($id);
     $email=session()->get('user');
    $data=user_panel::where('email',$email)->first();


        return view('tree_update', compact('tree','data'));
}




public function treeUpdate(Request $r){
    $id=$r->treeId;
    $date=$r->updateDate;
    $user_id=$r->user_id;
   $data=new treeUpdate_panel();
$data->tree_id=$id;
$data->tree_name=$r->treeName;
$data->height=$r->height;
$data->trunk_diameter=$r->trunkDiameter;
$data->canopy_spread=$r->canopySpread;
$data->new_growth=$r->newGrowth;
$data->health=$r->health;
$data->user_id;
$data->observations=$r->observations;
 $pic = $r->file('progress_photo');
        $picName = $pic->getClientOriginalName();
        $pic->move(public_path('image/'), $picName);
$data->progress_photo=$picName;
$data->update_date=$date;

$data->save();
return redirect('mytrees');

}


function growthView(request $r){
     $email=$r->session()->get('user');
    $data=user_panel::where('email',$email)->first();
    $records=treeupdate_panel::where('user_id',$data->id)->orderBy('update_date')->get();
      $data2=tree_panel::where('user_id',$data->id)->count();
                        $data4=user_panel::where('role','user')->count();

   return view('growth',compact('data','data2','records','data4'));
}
}


