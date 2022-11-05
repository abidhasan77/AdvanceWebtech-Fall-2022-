@extends('layouts.app')
@section('content')

<link href="/css/addvehicle.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('EditVehicle') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
              <div class="row">
                 

        <label for="">VehicleID</label>
        <input type="text" name="id" value="{{$products->id}}" class="form-control" readonly>
        @if($errors->has('id'))
        <span>
            <strong>{{$errors->first('id') }}</strong>
        </span>
        @endif
        <br> 
        <label for="">VehicleName</label>
        <input type="text" name="VehicleName" value="{{$products->VehicleName}}" class="form-control">
        @if($errors->has('VehicleName'))
        <span>
            <strong>{{$errors->first('VehicleName') }}</strong>
        </span>
        @endif

        <div class="col-md-4 form-group">
                    <span>Type</span>
                    <select name="Type" >
                           
                        <option value=""> Select</option>
                        <option value="AC">AC</option>
                        <option value="NonAC" >NonAC</option>      
                      </select>
                      @if($errors->has('Type'))
                      <span>
                     <strong>{{$errors->first('Type') }}</strong>
                      </span>
                     @endif

                </div>
                
                
                 
                 
                  <br> 
                  <label for="">StartingPoint</label>
                  <input type="text" name="StartingPoint" value="{{$products->StartingPoint}}" class="form-control">
                  @if($errors->has('StartingPoint'))
                   <span>
                   <strong>{{$errors->first('StartingPoint') }}</strong>
                  </span>
                  @endif

            
                <br>
                <div class="form-group">
                    <input type="text" name="FinishingPoint" Placeholder="FinishingPoint" value="{{$products->FinishingPoint}}" class="form-control">
                </div>

                
                <br>
                 
                <br>
                <div class="form-group">
                    <input type="text" name="TotalSeat" Placeholder="TotalSeat" value="{{$products->TotalSeat}}" class="form-control">
                </div>

                
                <br>

                <br>
                <div class="form-group">
                    <input type="text" name="Price" Placeholder="Price" value="{{$products->Price}}" class="form-control">
                </div>

                
                <br>

                <br>
                <div class="form-group">
                    <input type="text" name="ExtraInfo" Placeholder="ExtraInfo" value="{{$products->ExtraInfo}}" class="form-control">
                </div>

                
                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>

        </div>
        </div>

        </form>


</body>
</html>
@endsection


