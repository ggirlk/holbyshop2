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
		return view('admin.products', ['prods' => $prods]);
	}
    public function addProducts(/*Request $r*/)
    {
    	return view('admin.dashboard');
    }
}
