<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>VehicleName</th>
        <th>Type</th>
        
        <th>StartingPoint</th>
        <th>FinishingPoint</th>
        <th>TotalSeat</th>
        <th>Price</th>
        <th>ExtraInfo</th>
        <th>Image</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($products as $item)
    <tr>
                <div class="">
                <td>{{$item->id}}</td><br>
                <td>{{$item->VehicleName}}</td><br>
                <td>{{$item->Type}}</td><br>
                
                <td>{{$item->StartingPoint}}</td><br>
                <td>{{$item->FinishingPoint}}</td><br>
                <td>{{$item->TotalSeat}}</td><br>
                <td>{{$item->Price}}</td><br>
                <td>{{$item->ExtraInfo}}</td><br>
                <td>	     
                <img class="img" style="height: 100px; width: 150px;" src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                

                </td><br>
                <td>
                    <a class="btn btn-primary" href="/EditVehicle/{{$item->id}}">Edit</a>
               
                 <a class="btn btn-primary" href="/VehicleDelete/{{$item->id}}">Delete</a>
                </td> 
                </div>
    </div>

    </tr>
    @endforeach
</table>

</body>
</html>
