<html>
    <header>
       
        <title>BTG</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
    </header>
    <body> 
        <div id="background">
            <div class="col-sm-12">
                @yield('header')
            </div>     
                <div class="row">
                <div class="col-sm-2">
                    @yield('leftPane')
                </div>
                <div class="col-sm-10" >
                    @yield('content')
                </div>  
            </div>
        </div>
    </body>
</html>