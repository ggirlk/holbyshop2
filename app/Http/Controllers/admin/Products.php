<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{
	public function showProducts()
	{
		$prods = DB::table('products')->get();
		$products = [];
		foreach ($prods as $val) {
			$products[] = $val;
		}
		
		return view('admin.products', ['prods' => $products]);
	}
    public function addProducts(/*Request $r*/)
    {
    	return view('admin.dashboard');
    }
}
