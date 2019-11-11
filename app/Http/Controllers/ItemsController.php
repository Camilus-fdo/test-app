<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemsController extends Controller
{
	public function postItems(Request $request) {
		
		$item = new Items([
			'name' => $request->get('name'),
			'quantity' => $request->get('quantity'),
			'price' => $request->get('price')

		]);

		$item->save();
		return "Succes";
	}    
}
