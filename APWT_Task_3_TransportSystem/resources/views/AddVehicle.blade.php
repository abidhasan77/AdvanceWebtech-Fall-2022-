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

<form action="{{ route('AddVehicle') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
    <div class="row">
                
                <div class="form-group">
                    <input type="text" name="id" placeholder="VehicleID" class="form-control">
                </div>
                <br>
                 
                <div class="form-group">
                    <input type="text" name="VehicleName" placeholder="VehicleName" class="form-control">
                </div>
                <br>

                <div class="col-md-4 form-group">
                    <span>Type</span>
                    <select name="Type">
                        <option value=""> Select</option>
                        <option value="AC">AC</option>
                        <option value="NonAC" >NonAC</option>
                        

                      </select>
                </div>
                

                <br>
                <div class="form-group">
                    <input type="file" name="image" class="form-control">
                </div>


                <br>
                

                <div class="form-group">
                    <input type="text" name="StartingPoint" placeholder="StartingPoint" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="FinishingPoint" Placeholder="FinishingPoint"class="form-control">
                </div>

                
                <br>
                 
                <br>
                <div class="form-group">
                    <input type="text" name="TotalSeat" Placeholder="TotalSeat"class="form-control">
                </div>

                
                <br>

                <br>
                <div class="form-group">
                    <input type="text" name="Price" Placeholder="Price"class="form-control">
                </div>

                
                <br>

                <br>
                <div class="form-group">
                    <input type="text" name="ExtraInfo" Placeholder="ExtraInfo"class="form-control">
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