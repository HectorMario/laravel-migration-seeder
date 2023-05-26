<?php

namespace App\Http\Controllers;
use App\Models\Train;


class TrainsController extends Controller
{
    public function index(){
        $train =  Train::all();
        dd($train);
        return view('welcome');
    }
}
