<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Orders;
use Cart;
class OrderController extends Controller {
	public function getIndex(Request $request, Application $app){
		$order = Cart::get();
		return view('cart/valid', ['order' => Cart::get()]);
	}
	public function postOrder(Request $request, Application $app){
		$order = Cart::get();
		$price = Cart::total();

		$orders = Orders::create(['customer_id' => $_POST['customer_id'],
	                 			  'amount' => $price]);
		return view('/cart/confirmation', ['orders' => $orders]);
	}
	public function destroySession(){
		if(isset($_SESSION['cart'])){
				unset($_SESSION['cart']);
				session_destroy();
		}
		return view('cart/confirmation', []);
	}
}