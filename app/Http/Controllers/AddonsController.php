<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CategoryModel;
use App\Models\AddonsModel;

class AddonsController extends Controller
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

    public function add_addons()
    {
        $category = CategoryModel::where('category_status', '0')->orderBy('category', 'asc')->get();
        $addons = array();
        return view('admin.add_addons',compact('addons','category'));
    }

    public function add_addons_save(Request $request)
    {
        $validator = Validator::make($request->all(), ['category_id' => 'required', 'addons' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->addons_id!='' || $request->addons_id!=null)
            {
                $Addons    =   AddonsModel::where('addons_id',$request->addons_id)->first();
            }
            else
            {
                $Addons    =   new AddonsModel();
            }

            $Addons->addons_status = '0';
            $Addons->category_id = $request->category_id;
            $Addons->addons = $request->addons;
            $Addons->save();

            if($request->addons_id!='' || $request->addons_id!=null)
            {
                return redirect()->route('view-addons')->with('success','Addons details updated successfully.');
            }
            else
            {
                return redirect()->route('view-addons')->with('success','New Addons added successfully.');
            }
        }
    }

    public function view_addons()
    {
        $addons = AddonsModel::select('addons.*','category.category')->where('addons_status','0')->join('category', 'category.category_id', '=', 'addons.category_id')->get();
        return view('admin.view_addons',compact('addons'));
    }

    public function edit_addons($addons_id)
    {
        $category = CategoryModel::where('category_status', '0')->orderBy('category', 'asc')->get();
        $addons = AddonsModel::where('addons_id', $addons_id)->first();
        return view('admin.add_addons',compact('category', 'addons'));
    }

    public function addons_delete(Request $request)
    {
        $validator = Validator::make($request->all(),['delete_id' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            AddonsModel::where('addons_id',$request->delete_id)->update(['addons_status' => '1']);
        }
        return redirect()->route('view-addons')->with('success','Addons details deleted successfully.');
    }
}
