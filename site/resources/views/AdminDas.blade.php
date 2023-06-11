@extends('Layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 p-5">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    @php
                    $visitorCount = $DB::table('visitor')->count();
                    @endphp

                    <h3 class="fs-2">{{$visitorCount}}</h3>
                    <p class="fs-5">Total Visitor</p>
                </div>

            </div>
        </div>
        <div class="col-md-6 p-5">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    @php
                    $visitorCount = $DB::table('visitor')->where('vTime', '>=', $Carbon::today())->get();
                    @endphp

                    <h3 class="fs-2">{{$visitorCount->count()}}</h3>

                    <p class="fs-5">Today Visitor</p>
                </div>

                </d iv>
            </div>
        </div>



        <h1>Visitor Management</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>Country</th>
                    <th>City </th>
                    <th>Zip code</th>





                    <th>Time</th>
                </tr>
            </thead>




            <tbody>
                @foreach($visit as $visitor)
                <tr>
                    <td>{{$visitor->id}}</td>
                    <td>{{$visitor->pID}}</td>
                    <td>{{$visitor->vCountry}}</td>
                    <td>{{$visitor->vCity}}</td>
                    <td>{{$visitor->vPost}}</td>
                    <td>{{$visitor->vTime}}</td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>

    @endsection