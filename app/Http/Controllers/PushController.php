<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class PushController extends Controller
{
    //
    public function push(Request $request): \Illuminate\Http\JsonResponse
    {
        $event = $request->header('X-GitHub-Event');
        if ($event === 'push') {
            Artisan::call('app:pull');
        } elseif ($event === 'ping') {
            return response()->json(['message' => 'pong'], 200);
        } else {
            return response()->json(['message' => 'not push'], 200);
        }
        return response()->json(['message' => 'ok'], 201);
    }
}
