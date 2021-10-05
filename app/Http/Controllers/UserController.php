<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cook;
use App\Models\Recipe;
use App\Models\Image;


class UserController extends Controller
{
    function getData(Request $req){ //for validattion
        $req->validate([
            'name'=>'required | min:3 | alpha',
            'email'=>'required',
            //'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        foreach($req->file('file') as $file){
            $path= $file->store('img');
        }
        $cook = new Cook;
        $recipe = new Recipe;
        $image = new Image;
        $recipe=new Recipe();

        $cook->CookName = $req -> name;
        $cook ->CookEmail = $req -> email;
        $cook -> save();

        $cookid = Cook::max('CookID');
        $recipe -> CookID = $cookid;
        $recipe -> 	DishName = $req -> dishname;
        $recipe -> 	Ingredients = $req -> ingredients;
        $recipe -> 	Description = $req -> recipe;
        $recipe -> save();

        $recid = Recipe::max('RecipeID');
        // $cover = $req->file('file');
        // $extension = $cover->getClientOriginalName();
        $image -> CookID = $cookid;
        $image -> RecipeID = $recid;
        $image -> PicturePath = $path;
        $image -> save(); 
        return redirect('/');
    }

    function index(Request $req){
        foreach($req->file('file') as $file){
            echo $file->store('img');
        }
    }
}
