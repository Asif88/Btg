<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Place;
use App\Resource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($catId=-1)
    {
        
        $categories = Category::all();
        $places = Place::all();
        $selected_category=null;
        if($catId!=-1)
        {
            $selected_category= Category::find($catId);
        }
                   
        return view('mainBtg',['categories'=>$categories, 'selected_category'=>$selected_category,'places'=>$places]);
       
    }
    
    public function getPlace($placeId)
    {
         $categories = Category::all();
        $place = Place::find($placeId);
                
         return view('place',['categories'=>$categories, 'selected_place'=>$place]);
    }
            
    
    public function aboutUsView()
    {
        $categories = Category::all();
        return view('aboutUs',['categories'=>$categories]);
    }
}
