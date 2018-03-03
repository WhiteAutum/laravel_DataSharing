<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //所有数据列表
    public function dataList()
    {
        return view('Search.dataList');
    }
    //搜索数据
    public function searchData()
    {
        return view('Search.searchData');
    }
    //查询需求数据
    public function searchDataRequest()
    {
        return view('Search.searchDataRequest');
    }

    //所有任务列表
    public function taskList()
    {
        return view('Search.taskList');
    }
    //查询任务
    public function searchTask()
    {
        return view('Search.searchTask');
    }
    //查询任务需求
    public function searchTaskRequest()
    {
        return view('Search.searchTaskRequest');
    }
}
