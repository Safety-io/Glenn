<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class UserController extends Controller
{
    public function index():View | Paginator | App
    {
        $houses = House::all()->sortDesc();
        $houses = House::paginate(10);


        return view('pages.index', ['houses' => $houses]);
    }
}
