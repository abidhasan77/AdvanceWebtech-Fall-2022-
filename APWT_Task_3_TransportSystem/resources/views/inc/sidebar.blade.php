

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/sidebar.css" rel="stylesheet">
    <title>Document</title>
    
</head>
<body>

    
    <header class="top">
        
        <h1>EasyTravels</h1>

        <div class = "button">
            <a class="btn btn-danger" href="{{route('AddVehicle')}}">Add Vehicle</a>
            <a class="btn btn-danger" href="{{route('ShowVehicle')}}">Show</a>
            <a class="btn btn-danger" href="{{route('MyVehicle')}}">MyVehicle</a>
            <a href="http://">Ticket Book</a>
            <a href="http://">About</a>
            @if(Session::get('user')) {{Session::get('user')}} 
            <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
          @endif 
        </div>
    
   </header>    
</body>
</html>



    
