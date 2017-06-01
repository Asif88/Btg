<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="http://localhost/Btg/public/blade" class="navbar-brand">BTG</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#expand">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                
            </button>
        </div>
        <div class="collapse navbar-collapse" id="expand">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>            
                <li><a href="#">About</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Directions</a></li>
                <li><a href="#">Members</a></li> 
                <li><a href="#">Account</a></li>
            </ul>
            @if (Route::has('login'))
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else 
                            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        @endif 
                    </ul>
                </div>
            @endif
        </div>
    </div>    
</nav>

