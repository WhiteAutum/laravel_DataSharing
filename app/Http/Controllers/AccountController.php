<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function accountList()
    {
        return view('Accounts.accounts');
    }
    public function createAccount()
    {
        return view('Accounts.createAccount');
    }
    public function getBalance()
    {
        return view('Accounts.getBalance');
    }
    public function chargeAccount()
    {
        return view('Accounts.chargeAccount');
    }
    public function registerAccount()
    {
        return view('Accounts.registerAccount');
    }
    public function registerAccountList()
    {
        return view('Accounts.registerAccountList');
    }
}
