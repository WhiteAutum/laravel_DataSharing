<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementsController extends Controller
{
    //
    public function personalDataList()
    {
        return view('Managements.personalDataList');
    }

    //
    public function provideDataControl()
    {
        return view('Managements.provideDataControl');
    }
    //
    public function personalTaskList()
    {
        return view('Managements.personalTaskList');
    }
    //
    public function provideTaskControl()
    {
        return view('Managements.provideTaskControl');
    }
}
