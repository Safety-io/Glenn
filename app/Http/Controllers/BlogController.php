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
        $houses = House::all()->sortDesc();
        $houses = House::paginate(10);

        return view('pages.index', ['houses' => $houses]);
    }
    public function search(Request $request) : View
    {
        $input = $request->all();

        $address = $input['address'] ?? '';
        $city = $input['city'] ?? '';
        $deposit = $input['deposit'] ?? '';
        $standard = $input['standard'] ?? '';
        $monthly = $input['monthly'] ?? '';
        $rent = $input['rent'] ?? '';
        $commission = $input['commission'] ?? '';
        $house_statue = $input['house_statue'] ?? '';

        $houses = House::where('city', 'LIKE', '%'.$city.'%')
            ->where('address', 'LIKE', '%'.$address.'%')
            ->where('standard', 'LIKE', '%'.$standard.'%')
            ->where('monthly', 'LIKE', '%'.$monthly.'%')
            ->where('rent', 'LIKE', '%'.$rent.'%')
            ->where('commission', 'LIKE', '%'.$commission.'%')
            ->where('house_statue', 'LIKE', '%'.$house_statue.'%')
            ->paginate();

        return view('pages.search', ['houses' => $houses]);
    }
}
