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
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bikes.css" rel="stylesheet">  
        <!-- jQuery JS -->
        <script src="/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/js/bootstrap.min.js"></script>        
    </head>
    <body>
      <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="heading-title">
                        <h2>Laravel - Bike Details</h3>                        
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
       </div>
    </body>
</html>
