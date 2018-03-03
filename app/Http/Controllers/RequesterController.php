<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequesterController extends Controller
{
    //
    public function requestData()
    {
        return view('Requester.requestData');
    }

    public function requestDataList()
    {
        return view('Requester.requestDataList');
    }

    public function requestTask()
    {
        return view('Requester.requestTask');
    }
    public function requestTaskList()
    {
        return view('Requester.requestTaskList');
    }
}
