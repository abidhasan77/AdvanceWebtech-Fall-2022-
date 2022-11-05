<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="/css/log.css" rel="stylesheet">
<div class="center">
<form class="form-group"action="{{route('login')}}" method="post">
	<h1 id="lg">Login</h1>


  <div class="navi">
<nav>

        @include('HF.header')
        <div>

        @yield('content')

        </div>
</nav>
</div>





	{{@csrf_field()}}
	<label for="">Enter your Email number</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @if($errors->has('email'))
        <span>
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
        
        <br>
        <label for="">Enter Password</label>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @if($errors->has('password'))
        <span>
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
        <br>
        <input type="submit" value="Submit" class="btn btn-outline-dark">
        <a href="{{route('Registation')}}">Register hare</a>
</form>
</div>



</body>
</html>