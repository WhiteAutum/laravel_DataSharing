<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    //
    public function searchTransaction()
    {
        return view('Transactions.searchTransaction');
    }
    public function etherTransaction()
    {
        return view('Transactions.etherTransaction');
    }
}

