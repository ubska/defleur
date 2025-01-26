<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function delivery()
    {
        return view('client.delivery');
    }

    public function payment()
    {
        return view('client.payment');
    }

    public function returnPolicy()
    {
        return view('client.return');
    }
}
