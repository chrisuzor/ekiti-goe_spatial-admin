<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link>
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="{{asset('style.css')}}" rel="stylesheet">
    </head>
    <body>

    <div class="container">
        <div class="align-text-middle" >
            <img src="{{asset('logo_ek.png')}}" class=" rounded float-start align-text-bottom" alt="...">
            <img src="{{asset('ekiti_log.png')}}" width="110" height="110" class=" rounded float-end" alt="...">
            <p><h2 class="text-center"><strong>GOVERNMENT OF EKITI STATE NIGERIA</strong></h2></p>
            <p ><h4 class="text-center">BOARD OF INTERNAL REVENUE SERVICE</h4></p>

            <p class="text-center">PROPERTY TAX DEMAND NOTICE - {{\Carbon\Carbon::now()->toDateString()}}</p><hr>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-8"><strong>PROPERTY OWNER:</strong> {{$parcel->owner_name}}<br><strong>ADDRESS:</strong>{{$parcel->address}}<br>
                    <strong>PROPERTY ID:</strong>{{$parcel->parcel_id}}<br> <b>PROPERTY SIZE:</b> {{$parcel->parcel_area}}sqm<br> <b>PROPERTY USE:</b>
                    {{$parcel->parcel_main_use}} <br> <b>GEOTAG:</b> X - {{$parcel->location_coord_latitude}},Y -
                    {{$parcel->location_coord_latitude}}<br>
                    <br>
{{--                    <div class="custom-actions-btns mb-5">--}}
{{--                        <a target="_blank" href="{{route('parcels.htmlPdf', ['parcel' => $parcel->parcel_id])}}" class="btn btn-primary">--}}
{{--                            <i class="icon-download"></i> Download--}}
{{--                        </a>--}}
{{--                        <a href="#" class="btn btn-secondary">--}}
{{--                            <i class="icon-printer"></i> Print--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <div class="col-4"><img src="https://www.ekitigeospatial.com/landreg/images/{{$parcel->image}}" width="300" height="300" alt=""></div>
            </div>
            <div  style="padding: 40px;"><strong><h5 class="col-12 ">In accordance with the Ekiti State property taxes regulation, 2022, you have been assessed as follows: </h5></strong></div>
        </div>

        <div class="container">
            <table class="table table-borderless">

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bill Description/Type</th>
                    <th scope="col">Amount(₦)</th>
                    <th scope="col">Discount</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Land Use Charge {{date('Y')}}</td>
                    <td>10,000</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Balance Carried Forward</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                <tr>
                    <th scope="row">3</th>
                    <td><b>Amount Due</b></td>
                    <td><b>10,000</b></td>
                    <td></td>
                </tr>
                <tr>
                </tr>
                </tbody>

            </table><hr>

            <p>This notice should be produced at the point of payment and the bill number supplied. Payment should be
                made only through our authorized channels (banks and online) payable to Ekiti State Government
                You can also visit our office at Second Floor, Revenue
                House, beside Tantalizer, Fajuyi, Ado-Ekiti</p>
            <p>NOTE: Section 24 of the Ekiti State Land Use Charge Law states that where a person who has received a notice
                fails to pay the amount within the period specified in the notice, the charge payable shall be increased by the
                following percentage.<br>
                <b>A.Between 45 calendar days and 75 calendar days-15%</b> <br>
                <b>B.Between 75 calendar days and 105 calendar days-25%</b><br>
                <b>C.Between 105 calendar days and 135 calendar days - 40%</b><br>
                If payment is not made after 135 calendar days, the property shall be liable to receivership by the State or its
                appointed agent pending the recovery of all outstanding taxes, penalties and administrative charges on the
                order of a competent court of law.</p>
            <img src="{{asset('ec_sign.png')}}" class="rounded float-middle"><br>
            <img src="{{asset('code.png')}}" class=" rounded float-end" width="40" height="40">
            <b>ELEAZOR O. OGUNMILADE</b><br>
            Executive Chairman, Ekiti State Internal Revenue Service
        </div>

        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    </div>


    <script src="" async defer></script>
    </body>

</html>
