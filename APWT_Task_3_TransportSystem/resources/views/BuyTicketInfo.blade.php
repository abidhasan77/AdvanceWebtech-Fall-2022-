@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seats</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- External CSS -->

    <style>

      .space{

             padding-left: 20px;

      }

      


    </style>

</head>


<body>

@section('content')


                      <div class="seat">
                           


                            <table id="displaySeats" data-seats="">
                                <tr>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">A1</button>
                                <button type="button" class="btn btn-secondary">A2</button>
                                </div>
                                <span class="space"></span>
                                <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">A3</button>
                                <button type="button" class="btn btn-secondary">A4</button>
                                
                               </div>
                                </tr>
                                <tr>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">B1</button>
                                <button type="button" class="btn btn-secondary">B2</button>
                               </div>
                               <span class="space"></span>
                               <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">B3</button>
                                <button type="button" class="btn btn-secondary">B4</button>
                               </div>
                               <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">C1</button>
                                <button type="button" class="btn btn-secondary">C2</button>
                                </div>
                                <span class="space"></span>
                                <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">C3</button>
                                <button type="button" class="btn btn-secondary">C4</button>
                               </div>
                                </tr>
                                <tr>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">D1</button>
                                <button type="button" class="btn btn-secondary">D2</button>
                               </div>
                               <span class="space"></span>
                               <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">D3</button>
                                <button type="button" class="btn btn-secondary">D4</button>
                               </div>
                               
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">E1</button>
                                <button type="button" class="btn btn-secondary">E2</button>
                                </div>
                                <span class="space"></span>
                                <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">E3</button>
                                <button type="button" class="btn btn-secondary">E4</button>
                                
                               </div>
                                </tr>
                                <tr>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">F1</button>
                                <button type="button" class="btn btn-secondary">F2</button>
                               </div>
                               <span class="space"></span>
                               <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">F3</button>
                                <button type="button" class="btn btn-secondary">F4</button>
                               </div>

                               <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">G1</button>
                                <button type="button" class="btn btn-secondary">G2</button>
                                </div>
                                <span class="space"></span>
                                <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">G3</button>
                                <button type="button" class="btn btn-secondary">G4</button>
                                
                               </div>
                                </tr>
                                <tr>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">H1</button>
                                <button type="button" class="btn btn-secondary">H2</button>
                               </div>
                               <span class="space"></span>
                               <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">H3</button>
                                <button type="button" class="btn btn-secondary">H4</button>
                               </div>

                               </div>     
                            </table>
                            <div style="text-align: center; color: #9a031e; font-weight: bold;">
                                
                            </div>
                            </div>
                  
</body>
</html>

@endsection