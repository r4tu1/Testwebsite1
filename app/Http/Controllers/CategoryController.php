<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    public function AllCat(){
        //EloquentORM 
        //$categories = Category::latest()->paginate(4);
        //querybuilder
        $categories = DB::table('categories')->join('users','categories.user_id','users.id')
        ->select('categories.*','users.name')->paginate(4);
        
        return view('admin.category.index',compact('categories'));
    }

    public function AddCat(Request $request){

            $request->validate([
            'category_name' => 'required|max:20'  
            ],
            [
                'category_name.required' => 'Please give a category name', 
                'category_name.max' => 'Category name less then 20 charecter'  

                ]);


               Category::insert([
                  'category_name' => $request->category_name,

                   'user_id' => Auth::user()->id,
                    'created_at' => Carbon::now() 
                ]);

//                $data = array();
//               $data ['category_name'] = $request->category_name;
 //               $data ['user_id'] = Auth::user()->id;
//
  //              DB::table('categories')->insert($data);

                
        return Redirect()->back()->with('success','Category Inserted');            






    }
    //edit
    public function Edit($id){
        $categories = Category::find($id);
        return view('admin.category.edit',compact('categories'));

    }
    //update
    public function update(Request $request,$id){

        $update = Category::find($id)->update([

            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id
        ]);

        
        return Redirect()->route('all.category')->with('success','Category Updated'); 
    }

}
