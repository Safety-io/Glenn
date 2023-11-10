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
    public function search(Request $request) : View
    {
//
        $city = $_POST['city'];
        $standard = $_POST['standard'];
        $monthly = $_POST['monthly'];
        $rent = $_POST['rent'];
        $deposit = $_POST['deposit'];
        $commission = $_POST['commission'];


        $houses = House::where('deposit', 'LIKE', '%'.$deposit.'%')
            ->Orwhere('city', 'LIKE', '%'.$city.'%')
            ->Orwhere('standard', 'LIKE', '%'.$standard.'%')
            ->Orwhere('monthly', 'LIKE', '%'.$monthly.'%')
            ->Orwhere('rent', 'LIKE', '%'.$rent.'%')
            ->Orwhere('commission', 'LIKE', '%'.$commission.'%')
            ->get();
        return view('pages.search', ['houses' => $houses]);
    }
}
