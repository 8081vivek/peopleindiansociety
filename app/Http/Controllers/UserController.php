<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_panel;
use App\Models\tree_panel;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Exports\AllUsersTreeExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function register(Request $request)
    {

$request->validate([
    'email' => [
        'required',
        'email',
        Rule::unique('user_panels', 'email')->where(function ($query) {
            return $query->where('status', 1);
        }),
    ],
    'password' => 'required|min:6|confirmed',
    'phone'    => 'required|digits:10',
    'role'     => 'required',
]);

            
            $otp = rand(100000, 999999);
        $user = new user_panel();
        $user->email = $request->email;
        $user->name = $request->full_name;
        $user->mobile = $request->phone;
        $user->dob = $request->dob;
        $user->address = $request->address?$request->address:'';
        $user->city = $request->city?$request->city:'';
        $user->state = $request->state?$request->state:'0';
        $user->lat = $request->latitude ? $request->latitude : '0';
        $user->lng = $request->longitude ? $request->longitude : '0';
        $user->role = $request->role;
        $user->status = $request->role == 'volunteer' ? 'pending' : 'active';
        $user->otp=$otp;
        $user->password = Hash::make($request->password);
        $email=$request->email;
        session([
            'otp'        => $otp,
            'otp_email'  => $email,
            'otp_expire' => Carbon::now()->addMinutes(5),
        ]);
        Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($email) {
            $message->to($email)
                    ->subject('Registration Verification OTP – People of Indian Society');
        });
        $user->save();
        return redirect('otp');
    

    }

    function approveVolunteer(Request $r){
        $id=$r->id;
        $data= user_panel::find($id);
        $data->status="active";
        $data->save();
        return redirect('ad?section=volunteerManagement')
               ->with('success2', 'Volunteer approved successfully');
    }

    public function resendOtp(Request $r){
  $otp = rand(100000, 999999);
  $email=$r->email;
  $user =  user_panel::where('email',$email)->first();    
        session([
            'otp'        => $otp,
            'otp_email'=>$email,
            'otp_expire' => Carbon::now()->addMinutes(5),
        ]);
        Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($email) {
            $message->to($email)
                    ->subject('Registration Verification OTP – People of Indian Society');
        });

        $user->save();
  return redirect()->back()->withErrors([
        'otpe' => 'OTP otp send.'
    ]);      
      }
  


      function dashboardView(Request $r){

      $email=$r->session()->get('user');
      $data=user_panel::where('email',$email)->first();
$data2= tree_panel::where('user_id', $data->id)->count();
$data1=tree_panel::where('user_id',$data->id)->limit(2)->get();
            $userData=user_panel::where('role','user')->get();
                  $data4=user_panel::where('role','user')->count();
                       $trees = tree_panel::where('user_id', $data->id)
        ->select(
            'id',
            'treeName',
            'plantingDate',
            'latitude',
            'longitude',
            'pic'   // 👈 image from DB
        )
        ->whereNotNull('latitude')
        ->whereNotNull('longitude')
        ->get();
      return view('user_dashboard',compact('data','data2','data1','userData','data4','trees'));
      }

public function login(Request $r)
{
    $email = $r->email;
    $password = $r->password;
    $role = $r->role;

    $data = user_panel::where('email', $email)
                ->where('role', $role)
                ->first();

    if ($data) {
        if (Hash::check($password, $data->password)) {
            $r->session()->put('user',$email);
    
                    return  redirect('user');
                
        } else {
             return redirect('wrongPage')->withErrors([
                'loginError' => 'Incorrect password. Please try again.'
            ]);
        }
    } else {
        return redirect('NotFound')->withErrors([
            'loginError' => 'User not found. Please check your email and role.'
        ]);
    }
}



 

public function verifyOtp(Request $request)
{
    
    $otp = 
        $request->otp0 .
        $request->otp1 .
        $request->otp2 .
        $request->otp3 .
        $request->otp4 .
        $request->otp5;

    if (!session()->has('otp_expire') || Carbon::now()->gt(session('otp_expire'))) {
    return redirect()->back()->withErrors([
        'otpe' => 'OTP expired. Please resend OTP.'
    ]);
}

if ($otp != session('otp')) {
    return redirect()->back()->withErrors([
        'otpe' => 'Invalid OTP. Please try again.'
    ]);
}
$email=$request->session()->get('otp_email');
  $user =  user_panel::where('email',$email)->first();  
  $user->status="1";
$user->save();

    session()->forget(['otp', 'otp_expire']);
    return redirect('login');

}

function achivementView(Request $r){
        $email=$r->session()->get('user');
      $data=user_panel::where('email',$email)->first();
      $data2=tree_panel::where('user_id',$data->id)->count();
                        $data4=user_panel::where('role','user')->count();

      return view('achivement',compact('data','data2','data4'));

}

function logout(Request $r){
            $r->session()->forget('user');
            return redirect('login')->with('success','Logged out successfully');

}

function user_management(Request $r){
      $email=$r->session()->get('user');
      $data=user_panel::where('email',$email)->first();
      $data4=user_panel::where('role','user')->count();
      $data2=tree_panel::where('user_id',$data->id)->count();
            $userData=user_panel::where('role','user')->get();

        return view('user_management',compact('userData','data','data2','data4'));

}


public function userDelete($id, Request $r)
{
   $data=user_panel::find($id);
   $data->delete();
    return redirect('/ad?section='.$r->section)
           ->with('success', 'User deleted successfully');
}



// *****data export in excel ****


public function exportAllUsersTreesExcel()
{
    return Excel::download(
        new AllUsersTreeExport(),
        'all-users-tree-report.xlsx'
    );
}



// ***************************************user tree pdf********************




    public function usersTreesPdfFilter(Request $request)
    {
        // URL filters: ?role=volunteer&status=active&city=Kanpur&from=2025-01-01&to=2025-12-31
        $role   = $request->query('role');    // volunteer / user
        $status = $request->query('status');  // active / 1 etc (aapke db ke hisab se)
        $city   = $request->query('city');    // Kanpur / Delhi etc

        $from   = $request->query('from');    // plantingDate from
        $to     = $request->query('to');      // plantingDate to

        $query = DB::table('user_panels')
            ->leftJoin('tree_panels', 'user_panels.id', '=', 'tree_panels.user_id')
            ->select(
                'user_panels.id as user_id',
                'user_panels.name',
                'user_panels.email',
                'user_panels.mobile',
                'user_panels.city as user_city',
                'user_panels.state as user_state',
                'user_panels.address',
                'user_panels.role',
                'user_panels.status',

                'tree_panels.treeName',
                'tree_panels.plantingDate',
                'tree_panels.height',
                'tree_panels.age',
                'tree_panels.health',
                'tree_panels.village',
                'tree_panels.city as tree_city',
                'tree_panels.state as tree_state',
                'tree_panels.country'
            );

        // ✅ Filters apply
        if (!empty($role)) {
            $query->where('user_panels.role', $role);
        }

        if (!empty($status)) {
            $query->where('user_panels.status', $status);
        }

        if (!empty($city)) {
            // user city filter
            $query->where('user_panels.city', $city);
        }

        // plantingDate date range filter (tree_panels)
        if (!empty($from) && !empty($to)) {
            $query->whereBetween('tree_panels.plantingDate', [$from, $to]);
        } elseif (!empty($from)) {
            $query->where('tree_panels.plantingDate', '>=', $from);
        } elseif (!empty($to)) {
            $query->where('tree_panels.plantingDate', '<=', $to);
        }

        $data = $query->orderBy('user_panels.id')->get();

        // PDF generate
        $pdf = Pdf::loadView('pdf.users-trees-filter', [
                'data' => $data,
                'filters' => [
                    'role' => $role,
                    'status' => $status,
                    'city' => $city,
                    'from' => $from,
                    'to' => $to
                ]
            ])
            ->setPaper('a4', 'landscape');

        return $pdf->download('filtered-users-trees.pdf');
        // agar download nahi, screen pe show chahiye:
        // return $pdf->stream('filtered-users-trees.pdf');
    }
}




