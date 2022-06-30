<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $table = 'parcel';
    protected $appends = ['address', 'coordinates'];
    protected $primaryKey = 'parcel_id';
    use HasFactory;


    public function getAddressAttribute()
    {
        return $this->location_parcel_number . ', '.$this->location_streetname. ', '.$this->location_city_or_town.', '.$this->location_lga.' LGA, '.$this->location_state;
    }

    public function getCoordinatesAttribute()
    {
        return $this->location_coord_latitude . '- '. $this->location_coord_longitude;
    }

    public function scopeSearch($query, array $filters){
        $query->when($filters['search'] ?? false, function ($query, $search){
            $query->where('location_streetname', 'like', '%'.$search.'%')
                ->orWhere('location_city_or_town', 'like', '%'.$search.'%')
                ->orWhere('owner_name', 'like', '%'.$search.'%')
                ->orWhere('parcel_owner_phone_home', 'like', '%'.$search.'%')
                ->orWhere('parcel_main_use', 'like', '%'.$search.'%');
        });
    }

}
