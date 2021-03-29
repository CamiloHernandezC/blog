<?php

namespace App\Http\Controllers;


use App\Gift;
use Illuminate\Support\Facades\Session;

class WeddingController extends Controller
{
    /**
     * Display the list of travel blogs.
     *
     */
    public function show()
    {
        $gifts = Gift::all();
        return view('wedding', compact('gifts'));
    }


}
