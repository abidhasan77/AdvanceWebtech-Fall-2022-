
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .edit{
            margin-top: 90px;
            display: flex;
        }
    </style>
</head>
<body>


<div class="r">
    <div class="col-md-4">
        @foreach ($products as $item)
    <div class="card edit" style="width: 18rem;">
  <img class="card-img-top " src="{{asset('images/'.$item->image)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$item->VehicleName}}</h5>
    <p class="card-text">Price: BDT{{$item->Price}}</p>
    <a href="{{route('BuyTicketInfo')}}" class="btn btn-primary">BuyTicket</a>
  </div>
</div>
        @endforeach
    </div>  
    </div>     

</body>
</html>

@endsection