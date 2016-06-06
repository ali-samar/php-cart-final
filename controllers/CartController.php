<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('cart/index', ['cart' => Cart::get()]);
	}	

	public function postAdd(Request $request, Application $app){
		$product = Product::find($_POST['product']);
		Cart::add($product->toArray());
		Cart::count();
		Cart::total();
		return $app->redirect('/');
	}	

	public function getCheck(Request $request, Application $app){
		return view('cart/check', ['cart' => Cart::get()]);
	}
}