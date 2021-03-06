<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Place;
use App\Resource;
use Storage;
class AdminOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        
        
        return view('admin.places',['categories'=>$categories]);     
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
       $category=new Category;
       
       $category->title=$request->title;
       $category->save();
       return redirect()->action('AdminOperationController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCategory($id)
    {
        $categories = Category::find($id);
        
        return view('admin.editCategory',['categories'=>$categories]); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request, $id)
    {
        
        $categories = Category::find($id);
        $categories->title=$request->title;
        $categories->save();
        return redirect()->action('AdminOperationController@index');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategory($id)
    {
        $category = Category::find($id);
        $catPlaces=$category->places;
        foreach($catPlaces as $place)
        {
            $place->delete();
        }
            
        
        $category->delete();
        return redirect()->action('AdminOperationController@index');
    }
    
    public function addPlace($id)
    {
        $categories = Category::find($id);
        
        return view('admin.addPlace',['categories'=>$categories]); 
    }
    
    public function storePlace(Request $request, $id)
    {
        $category = Category::find($id);
        
        $place = new Place();
        $resource1 = new Resource();
        $resource2 = new Resource();
        $resource3 = new Resource();
        $resource4 = new Resource();
        $resource5 = new Resource();
        $resource = new Resource();
        
        $places = Place::all();
        
        $place->name=$request->name;
        $place->title=$request->title;
        $place->facebook=$request->facebook;
        $place->twitter=$request->twitter;
        $place->g_plus=$request->g_plus;
        $place->email=$request->email;
        $place->coordinates=$request->coordinates;
        $place->street=$request->street;
        $place->city=$request->city;
        $place->postal_code=$request->postal_code;
        $place->country=$request->country;
        $place->phone_number=$request->phone_number1;
        $place->phone_number=$request->phone_number2;
        $place->phone_number=$request->phone_number3;
        
        $place->description=$request->description;
        $place->fax=$request->fax;
       
        $image1=$request->file('image1');
        $request->image1->store("images");
        //$path=$request->image1->path();
        $path=$image1->hashName();
        $resource1->path=$path;
        $type="image";
        $resource1->type=$type;
        
        $image2=$request->file('image2');
        $request->image2->store("images");
        //$path=$request->image2->path();
        $path=$image2->hashName();
        $resource2->path=$path;
        $type="image";
        $resource2->type=$type;
        
        $image3=$request->file('image3');
        $request->image3->store("images");
        $path=$image3->hashName();
        $resource3->path=$path;
        $type="image";
        $resource3->type=$type;
        
        $image4=$request->file('image4');
        $request->image4->store("images");
        $path=$image4->hashName();
        $resource4->path=$path;
        $type="image";
        $resource4->type=$type;
        
        $image5=$request->file('image5');
        $request->image5->store("images");
        $path=$image5->hashName();
        $resource5->path=$path;
        $type="image";
        $resource5->type=$type;
        
        $video=$request->file('video');
        $request->video->store("images");
        $path=$video->hashName();
        $resource->path=$path;
        $type="video";
        $resource->type=$type;
        
        
        
        $category->places()->save($place);
        
        $place->resources()->save($resource1);
        $place->resources()->save($resource2);
        $place->resources()->save($resource3);
        $place->resources()->save($resource4);
        $place->resources()->save($resource5);
        $place->resources()->save($resource);
        
        return redirect()->action('AdminOperationController@index');
    }
    
    public function editplace($id)
    {
        $places = Place::find($id);
        
        return view('admin.editPlace',['places'=>$places]); 
    }
    
    public function updatePlace(Request $request, $id)
    {
        
        $places = Place::find($id);
        $places->name=$request->name;
        $places->title=$request->title;
        $places->facebook=$request->facebook;
        $places->twitter=$request->twitter;
        $places->g_plus=$request->g_plus;
        $places->email=$request->email;
        $places->coordinates=$request->coordinates;
        $places->street=$request->street;
        $places->city=$request->city;
        $places->postal_code=$request->postal_code;
        $places->country=$request->country;
        $places->phone_number=$request->phone_number;
        $places->description=$request->description;
        $places->fax=$request->fax;
        $places->save();
        return redirect()->action('AdminOperationController@index');       
    }
    public function destroyPlace($id)
    {
        $places = Place::find($id);
        $places->delete();
        return redirect()->action('AdminOperationController@index');
    }
    
}
