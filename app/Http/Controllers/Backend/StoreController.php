<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;
use App\Repositories\StoreRepository;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    use AuthenticatesUsers;

    private $store;
    private $city;

    public function __construct(StoreRepository $store, CityRepository $city)
    {
        $this->store = $store;
        $this->city = $city;
        //$this->middleware('auth');
    }

    public function dashboard(Request $request, $usuario)
    {
        $cities = $this->city->getAll();
        $offers = $this->store->findOfertasBySlug($usuario);
        return view(
            'stores.dashboard',
            compact(['offers', 'cities'])
        );
    }

    protected function guard()
    {
        return Auth::guard('store');
    }

    public function username()
    {
        return 'login';
    }

    public function authenticated(Request $request, $user)
    {
        //dd($user);
        return redirect()->route('dashboard.stores', ['usuario' => $user->slug]);
    }
}
