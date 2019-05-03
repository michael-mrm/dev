<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - list of bikes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bikes.css" rel="stylesheet">  
        <!-- CSS -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">  

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
                        <h2>Laravel - Bikes</h3>
                    </div>   
                    <hr>               
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                @if (session('message'))
                    <p>{{ session('message') }}</p>
                @endif
                </div>
            </div>
        </div>                 
        <div class="row">
            <div class="col-md-12">
                <div class="content">      
                    <div class="container" id="app">    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content">
                                    <div>
                                        {{--<bikes-component v-bind:propMessage="{{ $bikes }}"></bikes-component> --}}
                                        <bikes-component></bikes-component>
                                    </div>                    
                                </div>                
                            </div>            
                        </div>      
                    </div>           
                </div>                
            </div>            
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <hr>
                    <br/>
                    @can ('create', $bikes)
                    <a href="/createbikes">create a bike</a>           
                    @endcan
                </div>
            </div>
        </div>   
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
