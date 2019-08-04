<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {
        $getData = DB::table('car_info')->get();
        return view('list-data')->with('getData', $getData);
    }

    public function showDetail($id, Request $request)
    {
        $getData = DB::table('car_info')->where('id', $id)->first();

        return view('/detail-data')->with('detailData', $getData);
    }
}
