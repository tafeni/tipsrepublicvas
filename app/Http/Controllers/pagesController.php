<?php

namespace App\Http\Controllers;

use App\Models\GameboxAccesscode;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class pagesController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function redirecting($txn)
    {
        // Render the view with the transaction check
        return view('check-transaction')->with(['txn' => $txn]);
    }

    /*public function indexPost(Request $request)
    {
        return view('welcome');
    }*/

    public function queryTransaction(Request $request)
    {
        // Query the transaction status
        $txn = $request->txn;

        $accesscode = DB::table('gamebox_accesscodes')->where('sequence_no', '=', $txn)->first();
        $code = $accesscode->access_code;
        if ($code != null) {
            $url = "https://www.africagamingbox-ng.com/?a=$code";
            return response()->json(['status' => 'success', 'url' => $url]);
        } else {
            return response()->json(['status' => 'pending']);
        }

    }

    public function securedRoute(Request $request)
    {
        if (Session::has('txnid')) {
            Session::forget('txnid');
            Session::forget('txnid_expires_at');
        }

        $txnid = $this->generateTransactionId();
        $expiration = now()->addMinutes(5);

        $txn = $txnid;
        session(['txnid' => $txn]);
        session()->put('txnid_expires_at', $expiration);

        return redirect("http://ng-app.com/DigitechAfrican/aficangamingbox-landing-en-doi-web?origin_banner=1&trxId=$txnid");
    }

    public function generateTransactionId($length = 12)
    {
        $time = date('his');
        return Str::upper(Str::random($length)) . $time;
    }

    public function accessCodeGenerator($msisdn)
    {
        do {
            $code = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
            $existingCode = GameboxAccesscode::where('access_code', $code)->first();
        } while ($existingCode);

        // Insert the unique code into the database
        GameboxAccesscode::create([
            'access_code' => $code,
            'msisdn' => $msisdn
        ]);

        createLoginAccess($code);
        return $code;
    }

    public function createLoginAccess($code)
    {
        $time = time();

        $response = Http::withHeaders([
            'XF-API-KEY' => 'tKOrdhPeo92Rqpgf91lUxoNpCNQpAB-5'
        ])->post('https://www.africagamingbox-ng.com/api/acess-log', [
            'access_code' => $code,
            'generation_client' => 'mtn_ng',
            'generation_date' => $time,
        ]);

        // echo $response->body();
    }
}
