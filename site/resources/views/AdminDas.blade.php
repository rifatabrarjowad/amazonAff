@extends('Layout.app')
@section('content')
<div class="container">

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
            @foreach($visit as $visit)

            <tr>
                <td>{{$visit->id}}</td>
                <td>{{$visit->pID}}</td>
                <td>{{$visit->vCountry}}</td>
                <td>{{$visit->vCity}}</td>
                <td>{{$visit->vPost}}</td>
                <td>{{$visit->vTime}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection