<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function add_category(Request $request){
		
        $this->validate($request, [ 
        	'cat_name' => 'required|min:5',
        ]);

       	$category = New Category();
       	$category->cat_name = $request->cat_name;
       	$category->save();
       	return ['category' =>$category ,'message'=>'success'];
    }

    public function all_category() {

        $categories = Category::all();
        return response()->json([
            'categories'=>$categories
        ],200);
    }

    public function delete_category ($id) {
        $delecate = Category::find($id);
        $delecate->delete();
    }

    public function edit_category ($id) {
        

        $editcate = Category::find($id);
        return response()->json([
            'category' => $editcate
        ],200);
    }

    public function update_category (Request $request, $id) {
        $this->validate($request, [ 
            'cat_name' => 'required|min:5',
        ]);

        $upcategory = Category::find($id);
        $upcategory->cat_name = $request->cat_name;
        $upcategory->save();
    }

    // public function search_category ( Request $request) {
    //     $search = $request->cat_name;
    //     $search = Category::where('cat_name', 'LIKE', "%$search%")->get();
    //     return $search;
    // }
}
