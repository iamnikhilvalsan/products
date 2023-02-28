<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CategoryModel;

class CategoryController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function add_category()
    {
        $category = array();
        return view('admin.add_category',compact('category'));
    }

    public function add_category_save(Request $request)
    {
        $validator = Validator::make($request->all(), ['category' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->category_id!='' || $request->category_id!=null)
            {
                $Category    =   CategoryModel::where('category_id',$request->category_id)->first();
            }
            else
            {
                $Category    =   new CategoryModel();
            }

            $Category->category_status = '0';
            $Category->category = $request->category;            
            $Category->save();

            if($request->category_id!='' || $request->category_id!=null)
            {
                return redirect()->route('view-category')->with('success','Addon Category detais updated successfully.');
            }
            else
            {
                return redirect()->route('view-category')->with('success','New Addon Category added successfully.');
            }
        }
    }

    public function view_category()
    {
        $category = CategoryModel::select('*')->where('category_status','0')->get();
        return view('admin.view_category',compact('category'));
    }

    public function edit_category($category_id)
    {
        $category = CategoryModel::where('category_id', $category_id)->first();
        return view('admin.add_category',compact('category'));
    }

    public function category_delete(Request $request)
    {
        $validator = Validator::make($request->all(),['delete_id' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            CategoryModel::where('category_id',$request->delete_id)->update(['category_status' => '1']);
        }
        return redirect()->route('view-category')->with('success','Addon Category details deleted successfully.');
    }
}
