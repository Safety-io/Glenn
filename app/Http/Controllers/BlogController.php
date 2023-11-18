<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class BlogController extends Controller
{
    public function index():View | Paginator | App
    {
        $houses = House::query()->paginate(10);
        return view('pages.index', ['houses' => $houses]);

    }
    public function search(Request $request) : View
    {

//        city, standard, monthly, rent, deposit, commission
        $city = $request->input('city');
        $standard = $request->input('standard');
        $monthly = $request->input('monthly');
        $rent = $request->input('rent');
        $deposit = $request->input('deposit');
        $commission = $request->input('commission');

        $houses = House::query()
            ->where('city', 'LIKE', "%{$city}%")
            ->Orwhere('standard', 'LIKE', "%{$standard}%")
            ->Orwhere('monthly', 'LIKE', "%{$monthly}%")
            ->Orwhere('rent', 'LIKE', "%{$rent}%")
            ->Orwhere('deposit', 'LIKE', "%{$deposit}%")
            ->Orwhere('commission', 'LIKE', "%{$commission}%")
            ->get();

        return view('pages.search', ['houses' => $houses]);




    }
}
