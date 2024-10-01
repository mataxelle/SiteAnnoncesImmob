<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::orderBy('created_at', 'desc')->available()->limit(4)->get();

        return view('home', [
            'properties' => $properties
        ]);
    }
}
