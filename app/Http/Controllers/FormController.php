<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function formSubmit(Request $request) {
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
        $getData = DB::table('car_info')->where('car_img',$new_name )->first();

        return redirect('/detail-data/'.$getData->id);
    }
}
