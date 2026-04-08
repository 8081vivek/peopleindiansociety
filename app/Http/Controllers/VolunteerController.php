<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_panel;
use App\Models\tree_panel;

class VolunteerController extends Controller
{
  function volunteerDashboard(Request $r)
{
    $email = $r->session()->get('user');

    // logged-in user
    $data = user_panel::where('email', $email)->first();

    $data2 = tree_panel::where('user_id', $data->id)->count();
$data1=tree_panel::where('user_id',$data->id)->limit(2)->get();
    $rank = tree_panel::select('user_id')
        ->groupBy('user_id')
        ->havingRaw('COUNT(*) > ?', [$data2])
        ->count() + 1;

    return view('volenteer', compact('data', 'data2', 'rank','data1'));
}

}
