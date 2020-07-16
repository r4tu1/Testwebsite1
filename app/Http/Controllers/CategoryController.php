<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCat(){
        return view('admin.category.index');
    }

    public function AddCat(Request $request){

            $request->validate([
            'category_name' => 'required|max:20'  
            ],
            [
                'category_name.required' => 'Please give a category name', 
                'category_name.max' => 'Category name less then 20 charecter'  

                ]);
    }

}
