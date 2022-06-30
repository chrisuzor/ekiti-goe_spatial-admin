@extends('layouts.app')

@section('title', 'Parcels')

@section('content')
    <div class="container-fluid">

        {{-- Alert Messages --}}
        @include('common.alert')

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Parcels</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="15%">Name</th>
                                <th width="5%">Mobile</th>
                                <th width="25%">Address</th>
                                <th width="25%">Coordinates</th>
                                <th width="10%"> Use</th>
                                <th width="5%">Image</th>
                                <th width="10%">Generate Land Use Charge</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($parcels as $parcel)
                                <tr>
                                    <td>{{$parcel->owner_name}}</td>
                                    <td>{{$parcel->parcel_owner_phone_home}}</td>
                                    <td>{{ $parcel->address }}</td>
                                    <td>{{ $parcel->coordinates }}</td>
                                    <td>{{$parcel->parcel_main_use}}</td>
                                    <td><img height="80" width="200" src="https://www.ekitigeospatial.com/landreg/images/{{$parcel->image}}"> </td>
                                    <td> <a href="{{ route('parcels.land_use_charge', ['parcel' => $parcel->parcel_id]) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-download"></i> Generate
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $parcels->links() }}
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection
