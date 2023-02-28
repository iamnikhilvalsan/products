<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CategoryModel;
use App\Models\AddonsModel;
use App\Models\ProductsModel;
use App\Models\ProductsAddonsModel;

class ProductsController extends Controller
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

    public function add_products()
    {
        $category = CategoryModel::where('category_status', '0')->orderBy('category', 'asc')->get();
        $products = array();
        return view('admin.add_products',compact('products','category'));
    }

    public function add_products_save(Request $request)
    {
        $validator = Validator::make($request->all(), ['price' => 'required', 'products' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->products_id!='' || $request->products_id!=null)
            {
                $Products    =   ProductsModel::where('products_id',$request->products_id)->first();
            }
            else
            {
                $Products    =   new ProductsModel();
            }

            $Products->products_status = '0';
            $Products->products = $request->products;
            $Products->price = $request->price;

            if($files = $request->file('image'))
            {
                $path = $files->store('products', 'public_uploads');
                $filename = str_replace('products/', '', $path);

                /*$img500 = Image::make($files);
                $img500->resize(500, 500);
                $img500->save('uploads/cars/'.$filename);*/

                $Products->image = $filename;
            }

            $Products->save();

            if($request->products_id!='' || $request->products_id!=null)
            {
                return redirect()->route('view-products')->with('success','Products details updated successfully.');
            }
            else
            {
                return redirect()->route('view-products')->with('success','New Products added successfully.');
            }
        }
    }

    public function view_products()
    {
        $products = ProductsModel::select('*')->where('products_status','0')->get();
        return view('admin.view_products',compact('products'));
    }

    public function edit_products($products_id)
    {
        $products = ProductsModel::where('products_id', $products_id)->first();
        return view('admin.add_products',compact('products'));
    }

    public function products_delete(Request $request)
    {
        $validator = Validator::make($request->all(),['delete_id' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            ProductsModel::where('products_id',$request->delete_id)->update(['products_status' => '1']);
        }
        return redirect()->route('view-products')->with('success','Products details deleted successfully.');
    }

    public function addons_products($products_id)
    {
        $category = CategoryModel::where('category_status', '0')->orderBy('category', 'asc')->get();
        $products = ProductsModel::where('products_id', $products_id)->first();
        $productsaddons = ProductsAddonsModel::select('products_addons.*', 'category.category', 'addons.addons')
                                                ->where('products_id', $products_id)
                                                ->where('products_addons_status','0')
                                                ->join('category', 'category.category_id', '=', 'products_addons.category_id')
                                                ->join('addons', 'addons.addons_id', '=', 'products_addons.addons_id')
                                                ->get();

        return view('admin.addons_products',compact('products','category','productsaddons'));
    }

    public function add_addons_products_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'products_id' => 'required', 
            'category_id' => 'required', 
            'addons_id' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            if($request->products_addons_id!='' || $request->products_addons_id!=null)
            {
                $ProductsAddons    =   ProductsAddonsModel::where('products_addons_id',$request->products_addons_id)->first();
            }
            else
            {
                $ProductsAddons    =   new ProductsAddonsModel();
            }

            $ProductsAddons->products_addons_status = '0';
            $ProductsAddons->products_id = $request->products_id;
            $ProductsAddons->category_id = $request->category_id;
            $ProductsAddons->addons_id = $request->addons_id;

            $ProductsAddons->save();

            if($request->products_addons_id!='' || $request->products_addons_id!=null)
            {
                return redirect()->route('addons-products',['id' => $request->products_id])->with('success','Products Addons details updated successfully.');
            }
            else
            {
                return redirect()->route('addons-products',['id' => $request->products_id])->with('success','New Products Addons added successfully.');
            }
        }
    }

    public function addons_products_delete(Request $request)
    {
        $validator = Validator::make($request->all(),['delete_id' => 'required', 'products_id' => 'required']);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }
        else
        {
            ProductsAddonsModel::where('products_addons_id',$request->delete_id)->where('products_id',$request->products_id)->update(['products_addons_status' => '1']);
        }
        return redirect()->route('addons-products',['id' => $request->products_id])->with('success','Addons details deleted successfully.');
    }

    public function fetch_addons(Request $request)
    {
        $validator = Validator::make($request->all(),['category_id' => 'required']);

        if ($validator->fails())
        {
            return response()->json(['success' => false]);
        }
        else
        {
            $addons = AddonsModel::select('addons_id','addons')->where('category_id', $request->category_id)->where('addons_status', '0')->orderBy('addons', 'asc')->get();
            return response()->json(['success' => true, 'data'=>$addons]);
        }
    }

}
