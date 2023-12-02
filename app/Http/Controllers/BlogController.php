<?php

namespace App\Http\Controllers;

use App\Models\{City, House, Standard, Rent, Commission, Deposit, Price};
use Illuminate\Database\Eloquent\{Builder, Collection};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class BlogController extends Controller
{
    private Collection $standards;
    private Collection $cities;
    private Collection $rents;
    private Collection $commissions;
    private Collection $deposits;
    private Collection $prices;

    public function __construct()
    {
        $this->standards = Standard::all();
        $this->cities = City::all();
        $this->rents = Rent::all();
        $this->commissions = Commission::all();
        $this->deposits = Deposit::all();
        $this->prices = Price::all();

    }

    public function index():View | Paginator | App
    {
        $houses = House::query()->orderBy('created_at', 'desc')->paginate(10);


        return view(
            'pages.index',
            [
                'houses' => $houses,
                'standards' => $this->standards,
                'cities' => $this->cities,
                'rents' => $this->rents,
                'commissions' => $this->commissions,
                'deposits' => $this->deposits,
                'prices' => $this->prices,
            ],
        );

    }
    public function search(Request $request) : View
    {
        $city = $request->input('city', '');
        $standard = $request->input('standard', '');
        $monthly = $request->input('monthly', '');
        $rent = $request->input('rent', '');
        $deposit = $request->input('deposit', '');
        $commission = $request->input('commission', '');

        $houses = House::query()
            ->where(function($query) use ($city) {
                if (!empty($city)) {
                    $city--;
                    $query->where('city', 'LIKE', "%$city%");
                }
            })
            ->orWhere(function(Builder $query) use ($standard) {
                if (!empty($standard)) {
                    $standard--;
                    $query->where('standard', 'LIKE', "%$standard%");
                }
            })
            ->orWhere(function(Builder $query) use ($monthly) {
                if (!empty($monthly)) {
                    $monthly--;
                    $query->where('monthly', 'LIKE', "%$monthly%");
                }
            })
            ->orWhere(function(Builder $query) use ($rent) {
                if (!empty($rent)) {
                    $rent--;
                    $query->where('rent', 'LIKE', "%$rent%");
                }
            })
            ->orWhere(function(Builder $query) use ($deposit) {
                if (!empty($deposit)) {
                    $deposit--;
                    $query->where('deposit', 'LIKE', "%$deposit%");
                }
            })
            ->orWhere(function(Builder $query) use ($commission) {
                if (!empty($commission)) {
                    $commission--;
                    $query->where('commission', 'LIKE', "%$commission%");
                }
            })
            ->paginate(10);

        return view('pages.search', [
            'houses' => $houses,
            'standards' => $this->standards,
            'cities' => $this->cities,
            'rents' => $this->rents,
            'commissions' => $this->commissions,
            'deposits' => $this->deposits,
            'prices' => $this->prices,
            ]);
    }

    public function about() {
        return view('pages.about');
    }

}
