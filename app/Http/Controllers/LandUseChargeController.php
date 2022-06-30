<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;

class LandUseChargeController extends Controller
{
    public function index(){

        $parcels = Parcel::query()->search(\request(['search']))->join('land_use_charges', 'land_use_charges.parcel_id', '=', 'parcel.parcel_id')
            ->select(['parcel.parcel_id', 'parcel_main_use', 'image',
            'location_parcel_number', 'location_streetname', 'location_city_or_town',
            'location_lga', 'location_state', 'location_coord_latitude', 'location_coord_longitude',
            'owner_name', 'parcel_owner_phone_home', 'land_use_charges.amount', 'land_use_charges.year',
                'land_use_charges.balance_carried_forward'
        ])->paginate(10);

        return view('land_use_charges.index', ['parcels' => $parcels]);
    }
}
