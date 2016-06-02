<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use App\Models\Customer;
use Cart;
class CartController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('cart/index', ['products' => Cart::get()]);
	}	

	public function postAdd(Request $request, Application $app){
		$product = Product::find($_POST['product']);
		Cart::add($product->toArray());
		Cart::count();
		Cart::total();
		return $app->redirect('/');
	}	

	public function getCheck(Request $request, Application $app){
		return view('cart/check', ['products' => Cart::get()]);
	}

	public function saveUser(Application $app){
		// $user = new Customer;
		// $user->first_name = Customer::find($_POST['first_name']);
		// $user->save();
		if(isset($_SESSION['cart'])){
			unset($_SESSION['cart']);
			session_destroy();
		}
		return view('cart/valid', []);
	}

}