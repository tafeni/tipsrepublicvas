<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class callback extends Controller
{
    public function handleCallback(Request $request)
    {
        // Get the content from the request
        $content = $request->getContent();
        // Append the content to the file
        $filePath = storage_path('logs/callback_data.txt');
        File::append($filePath, json_encode($content,JSON_PRETTY_PRINT) . PHP_EOL);

        return response()->json(['message' => 'notification received successfully.'], 200);
    }

    public function notAllowed()
    {
        return ["error" => "The GET method is not supported for route callback. Supported methods: POST."];
    }
}
