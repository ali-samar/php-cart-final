<?php

session_start();

class Cart {
	public static function get() {
		if(isset($_SESSION['cart'])){
			return json_decode($_SESSION['cart']);
		}
	}
	public static function add($product) {
		if(isset($_SESSION['cart'])){
			$cart = json_decode($_SESSION['cart']);
		} else {
			$cart = array();
		}
		array_push($cart, $product);
		$_SESSION['cart'] = json_encode($cart);
	}
	public function count(){
		return count(self::get());
	}
	public function total(){
		$products = self::get();
		$total = [];
		foreach ($products as $product) {
			array_push($total, $product->price);
		}
		return array_sum($total);
	}
}