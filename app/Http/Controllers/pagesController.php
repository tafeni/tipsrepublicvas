<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class pagesController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function securedRoute(Request $request)
    {
        $txnid = $this->generateTransactionId();
        return redirect("http://ng-app.com/DigitechAfrican/aficangamingbox-landing-en-doi-web?origin_banner=1&trxId=$txnid");
    }

    public function generateTransactionId($length = 12) {
        $time = date('his');
        return Str::upper(Str::random($length)).$time;
    }
}
