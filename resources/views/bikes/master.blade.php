<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - list of bikes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/bikes.css" rel="stylesheet">  
    </head>
    <body>
      <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="heading-title">
                        <h2>Laravel - Bikes</h3>
                    </div>   
                    <hr>               
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div>
                        @yield('content')
                    </div>                    
                </div>                
            </div>            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <hr>
                    <br/>
                    <a href="/createbikes">create a bike</a>           
                </div>
            </div>
        </div>  
       </div>
    </body>
</html>
