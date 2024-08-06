<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionTransactionId
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the session variable exists and if it has expired
        if (Session::has('txnid')) {
            $txn = Session::get('txnid');
            // do a check from the DB
            // If transaction exist do a redirect and forget the session

            $expiresAt = Session::get('txnid_expires_at');
            // if (now()->greaterThan($expiresAt)) {
                Session::forget('txnid');
                Session::forget('txnid_expires_at');
            // }

            // Pause execution for 5 seconds
            sleep(10);

            return redirect("/redirecting/".$txn);

        }

        return $next($request);
    }
}
