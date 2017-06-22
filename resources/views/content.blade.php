<div class="space">
<div class=" container col-sm-11">
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators ">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/slide1.jpg"  width="1190" height="45"> 
            </div>
            <div class="item">
                <img src="images/slide2.jpg" width="1190" height="45">
            </div>    
            <div class="item">
                <img src="images/slide3.jpg" width="1190" height="45">          
            </div>
            <div class="item">
                <img src="images/slide4.jpg" width="1190" height="45">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
   <div>
        <div class="alert alert-danger">
                <marquee><p font-size:10>Bahawalpur</p></marquee>
        </div>
        <div class="col-sm-offset-4">
            <h2 style="color:#C00" >Welcome to Bahwalpur</h2>
        </div>
    </div>
    
            <p class="text-info">
            Bahawalpur ( بہاولپور‎), is a city located in the Punjab province of Pakistan. Bahawalpur is the 12th largest city in Pakistan with an estimated <br>population of 798,509. The city also lies near &nbsp; the ancient Derawar Fort in the Cholistan &nbsp; Desert near the border with India, and serves as the &nbsp; gateway to Pakistan's &nbsp; Lal Suhanra &nbsp; National Park.
            Bahawalpur &nbsp; was once the &nbsp; capital of the former &nbsp; princely &nbsp; state of Bahawalpur ruled by Nawabs. The Nawabs of Bahawalpur were regarded as part of the Rajputana &nbsp; States, &nbsp; the majority of which now form the bulk of the &nbsp; neighbouring Indian state of Rajasthan . The Nawabs bestowed &nbsp; Bahawalpur with several &nbsp; monuments, such as the palaces of &nbsp;  Noor Mahal, Sadiq Ghar Palace, and Darbar Mahal.
            Bahawalpur was a princely state of British India and later, Pakistan, that existed from 1802 to 1955.
           
            <div class="row col-sm-offset-4 ">
                <h2 style="color:#C00" >Bahawalpur Places</h2>
            </div>
            
                    
            
            @if($selected_category!=null)                      
               <div class="row col-sm-3 col-sm-offset-4">
                <table class="table table-responsive table-hover"> 
                @foreach($selected_category->places as $place)
                <tr>
                <td align="center"><a href="{{route("place",['id'=>$place->id])}}"> {{$place->name}}</a></td>
                </tr>
                @endforeach
                </table>
                </div>
            @else
                <div class="row col-sm-7 col-sm-offset-3">
                @foreach($places as $place)
                <div class="col-sm-offset-3 col-sm-7">
                    <a href="{{route("place",['id'=>$place->id])}}"> {{$place->name}} <br><br>
                </div>
                       
                @foreach($place->resources as $resource)
                    <img src="http://localhost/Btg/storage/app/images/{{$resource->path}}" class="img-rounded" width="140" height="140">
                    
                    @endforeach<br></a>
                    
                @endforeach
                </div>
                
            @endif
            
                
            
        </strong>
    </p>
</div>
<div class="col-sm-1">
<br><br><br><br><br><br><br><br>
    <a href="https://www.facebook.com/groups/1759227087739419/"><i class="fa fa-facebook-square fa-2x"></i></a><br><br>
    <a href="https://twitter.com/shahab981"><i class="fa fa-twitter-square fa-2x"></i></a><br><br>
    <a href="https://www.google.com/gmail/about/"><i class="fa fa-google-plus-square fa-2x"></i></a><br><br>
    <a href=https://www.instagram.com/"><i class="fa fa-instagram fa-2x"></i></a>
</div>