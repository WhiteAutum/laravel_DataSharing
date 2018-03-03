<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //数据提供者提供数据
    public function provideData()
    {
        return view('Provider.provideData');
    }
    //已提供的数据列表
    public function provideDataList()
    {
        return view('Provider.provideDataList');
    }
    //提供任务
    public function provideTask()
    {
        return view('Provider.provideTask');
    }
    //任务列表
    public function taskList()
    {
        return view('Provider.taskList');
    }
}
