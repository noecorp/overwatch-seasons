<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all()->sortBy('name');
        return view('test', compact('countries'));
    }
}
