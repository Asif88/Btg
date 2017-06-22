<div class="space">
    <div class="container col-sm-11 col-sm-offset-1 rounded">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Tourist Guide
            </div>      
            <ul class="nav nav-pills nav-stacked">
                @foreach($categories as $category)
                <li><a href="{{route("category",['id'=>$category->id])}}">{{$category->title}}</a></li>
                @endforeach
            </ul>
        </div>    
    </div>
</div>  