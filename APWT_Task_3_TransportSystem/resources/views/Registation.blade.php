<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="/css/reg.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="start">

<div class="navi">
@include('HF.header')
<nav>

       
       

        @yield('content')

        
</nav>
</div>



<form action="{{route('Regi')}}" class="form-group" method="post">


<h2>Registation</h2>
    {{csrf_field()}}

   

    <label for="">Id</label>
        <input type="text" name="id" value="{{old('id')}}" class="form-control">
        @if($errors->has('id'))
        <span>
            <strong>{{$errors->first('id') }}</strong>
        </span>
        @endif
       
        <label for="">Name</label>
        <input type="text" name="companyname" value="{{old('companyname')}}" class="form-control">
        @if($errors->has('companyname'))
        <span>
            <strong>{{$errors->first('companyname') }}</strong>
        </span>
        @endif
        
      
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @if($errors->has('phone'))
        <span>
            <strong>{{$errors->first('phone') }}</strong>
        </span>
        @endif
        
        <label for="">Email</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @if($errors->has('email'))
        <span>
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif


        
        <label for="">Type</label>
        <select id="type" name="type" value="{{old('type')}}" class="form-control">
        <option value="Non AC"> Non AC</option>
        <option value="AC"> AC</option>
        </select>
        @if($errors->has('type'))
        <span>
        <strong>{{$errors->first('type') }}</strong>
        </span>
        @endif
        
        
        <label for="">Password</label>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @if($errors->has('password'))
        <span>
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
        <br>
          
        <input type="submit" value="Submit" class="btn btn-outline-dark">
        <a href="{{route('login')}}">Already have an account</a>
</form>

  </div>
</body>
</html>