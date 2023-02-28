<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\AddonsModel;
use App\Models\ProductsModel;
use App\Models\ProductsAddonsModel;

class WebsiteController extends Controller
{
    public function index()
    {
        $products = ProductsModel::select('*')->where('products_status','0')->get();

        return view('website.home',compact('products'));
    }

    public function product_details($products_id)
    {
        $DT = ProductsModel::select('*')->where('products_id',$products_id)->where('products_status','0')->first();

        // fetching addons category wise
        $Addons = ProductsAddonsModel::select('category_id')->where('products_id', $products_id)->where('products_addons_status','0')->groupBy('category_id')->get();

        $Array = array();
        foreach($Addons as $DT2)
        {
            $category_id = $DT2->category_id;

            $Category = CategoryModel::select('category')->where('category_id',$category_id)->first();


            $NewAddons = ProductsAddonsModel::select('products_addons.products_addons_id', 'addons.addons')
                                                ->where('products_addons.products_id', $products_id)
                                                ->where('products_addons.category_id', $category_id)
                                                ->where('products_addons_status','0')
                                                ->join('addons', 'addons.addons_id', '=', 'products_addons.addons_id')
                                                ->get();

            $Array[] = array('category'=>$Category->category, 'addons'=> $NewAddons);
        }
        // fetching addons category wise

        return view('website.product_details',compact('DT','Array'));
    }
}
