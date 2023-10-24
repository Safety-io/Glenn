<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PushController extends Controller
{
    //
    public function push(Request $request)
    {
        $event = $request->header('x-github-event');
        if ($event === 'push') {
            Artisan::call('app:pull');
        }
    }
}
