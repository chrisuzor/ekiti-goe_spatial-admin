<?php

namespace App\Http\Controllers;

use App\Models\LandUseCharge;
use App\Models\Parcel;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $parcels = Parcel::query()->search(\request(['search']))->select(['parcel_id', 'parcel_main_use', 'image',
            'location_parcel_number', 'location_streetname', 'location_city_or_town',
            'location_lga', 'location_state', 'location_coord_latitude', 'location_coord_longitude',
            'owner_name', 'parcel_owner_phone_home'
            ])->paginate(10);

        return view('parcels.index', ['parcels' => $parcels]);
    }

    public function land_use_charge(Parcel $parcel){
        return view('parcels.landuse_charge', ['parcel' => $parcel]);

    }
}
