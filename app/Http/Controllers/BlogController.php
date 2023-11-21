<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Commission;
use App\Models\Deposit;
use App\Models\House;
use App\Models\Price;
use App\Models\Rent;
use App\Models\Standard;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class BlogController extends Controller
{
    public function index():View | Paginator | App
    {
        $houses = House::query()->paginate(10);
        $standards = Standard::all();
        $cities = City::all();
        $rents = Rent::all();
        $commissions = Commission::all();
        $deposits = Deposit::all();
        $prices = Price::all();

        return view(
            'pages.index',
            [
                'houses' => $houses,
                'standards' => $standards,
                'cities' => $cities,
                'rents' => $rents,
                'commissions' => $commissions,
                'deposits' => $deposits,
                'prices' => $prices,
            ],
        );

    }
    public function search(Request $request) : View
    {

        $standards = Standard::all();
        $cities = City::all();
        $rents = Rent::all();
        $commissions = Commission::all();
        $deposits = Deposit::all();
        $prices = Price::all();

//        city, standard, monthly, rent, deposit, commission
        $city = $request->input('city', '');
        $standard = $request->input('standard', '');
        $monthly = $request->input('monthly', '');
        $rent = $request->input('rent', '');
        $deposit = $request->input('deposit', '');
        $commission = $request->input('commission', '');

        $houses = House::query()
            ->where(function($query) use ($city) {
                if (!empty($city)) {
                    $query->where('city', 'LIKE', "%$city%");
                }
            })
            ->orWhere(function(Builder $query) use ($standard) {
                if (!empty($standard)) {
                    $query->where('standard', 'LIKE', "%$standard%");
                }
            })
            ->orWhere(function(Builder $query) use ($monthly) {
                if (!empty($monthly)) {
                    $query->where('monthly', 'LIKE', "%$monthly%");
                }
            })
            ->orWhere(function(Builder $query) use ($rent) {
                if (!empty($rent)) {
                    $query->where('rent', 'LIKE', "%$rent%");
                }
            })
            ->orWhere(function(Builder $query) use ($deposit) {
                if (!empty($deposit)) {
                    $query->where('deposit', 'LIKE', "%$deposit%");
                }
            })
            ->orWhere(function(Builder $query) use ($commission) {
                if (!empty($commission)) {
                    $query->where('commission', 'LIKE', "%$commission%");
                }
            })
            ->get();

        return view('pages.search', [
            'houses' => $houses,
            'standards' => $standards,
            'cities' => $cities,
            'rents' => $rents,
            'commissions' => $commissions,
            'deposits' => $deposits,
            'prices' => $prices,
            ]);
    }

}
