<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function showmydash() {

        return view('dashboard');
    }

    public function post(Request $request) {

        dd($request->input('quantities'),$request->input('names'), $request->input('prices'));
    }
}
