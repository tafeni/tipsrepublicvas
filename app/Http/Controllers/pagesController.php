<?php

namespace App\Http\Controllers;

use App\Models\GameboxAccesscode;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class pagesController extends Controller
{
    public function index(Request $request)
    {
        // Get the content from the request
        $content = $request->getContent();
        $time = Carbon::now();
        $secured = $time." :Secured_redirect_Get: ";
        // Append the content to the file
        $filePath = storage_path('app/callback_data.txt');
        File::append($filePath, json_encode($secured.$content,JSON_PRETTY_PRINT) . PHP_EOL);

        return view('welcome');
    }

    public function indexPost(Request $request)
    {
        // Get the content from the request
        $content = $request->getContent();
        $time = Carbon::now();
        $secured = $time." :Secured_redirect_Post: ";
        // Append the content to the file
        $filePath = storage_path('app/callback_data.txt');
        File::append($filePath, json_encode($secured.$content,JSON_PRETTY_PRINT) . PHP_EOL);

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

    public function accessCodeGenerator($msisdn) {
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

    public function createLoginAccess($code) {
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
