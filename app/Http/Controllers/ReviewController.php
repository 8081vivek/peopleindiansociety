<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review_panel;

class ReviewController extends Controller
{
    function reviewForm(Request $r){
$pic = $r->file('image');
$picName = $pic->getClientOriginalName();
$pic->move(public_path('public/image'), $picName);
$data=new review_panel();
$data->name = $r->name;
$data->title = $r->title;
$data->rating = $r->rating;
$data->review = $r->review;
$data->email = $r->email;
$data->product_type = $r->product_type;
$data->image = $picName; 
$data->status = "pending";
$data->save();
return redirect()->back()->with('success', 'Review submitted successfully!');

    }
   

public function reviewsPage()
{
    $reviews = review_panel::where('status', 'approved')->get();

    return view('review', compact('reviews'));
}

}
