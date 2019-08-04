<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function formSubmit(Request $request)
    {
        $request->validate([
            'brand' => 'required|max:255',
            'model' => 'required|max:255',
            'fuel' => 'required|max:255',
            'price' => 'required|integer',
            'transmission' => 'required',
            'carImage' => 'required|image|mimes:jpeg,png,jpg,svg'
        ]);

        $image = $request->file('carImage');
        $new_name = time() . '.' . $image->getClientOriginalName();
        $image->move('uploads/cars_img/', $new_name);

        DB::table('car_info')->insert([
            "brand" => $request->input('brand'),
            "model" => $request->input('model'),
            "fuel" => $request->input('fuel'),
            "price" => $request->input('price'),
            "transmission" => $request->input('transmission'),
            "car_img" => $new_name,
        ]);
        $getData = DB::table('car_info')->where('car_img', $new_name)->first();

        return redirect('/detail-data/' . $getData->id);
    }

    public function commentSubmit(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);
        DB::table('comments')->insert([
            "user_name" => uniqid('gst'),
            "post_id" => uniqid(),
            "parent_id" => $request->input('parent_id'),
            "body" => $request->input('body')
        ]);

        $getData = DB::table('comments')->where('parent_id', $request->input('parent_id'))->get();

        $request->session()->put('commentsData', $getData);

        return back();
    }

    public function voteSubmit(Request $request)
    {
        if ($request->get('upVote') == '1') {
            DB::table('comments')
                ->where([
                    ['post_id', $request->input('post_id')],
                    ['parent_id', $request->input('parent_id')],
                ])
                ->increment('votes', 1);
        } else {
            DB::table('comments')
                ->where([
                    ['post_id', $request->input('post_id')],
                    ['parent_id', $request->input('parent_id')],
                ])
                ->decrement('votes', 1);
        }

        $getData = DB::table('comments')->where('parent_id', $request->input('parent_id'))->get();

        $request->session()->put('commentsData', $getData);

        return back();
    }
}
