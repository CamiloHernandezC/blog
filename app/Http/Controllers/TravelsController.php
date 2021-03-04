<?php

namespace App\Http\Controllers;


class TravelsController extends Controller
{
    /**
     * Display the list of travel blogs.
     *
     */
    public function show()
    {
        return view('travels');
    }

    public function mexico()
    {
        return view('travels');
    }
}
