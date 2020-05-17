<?php

namespace Wildanfuady\WFcart;

class WFcart{


    public static function totals()
    {
        $session = session('cart');
		return is_array($session)? array_values($session): array();
    }

    public function add_cart($id = null, $item = null)
    {
        if(session()->has('cart')) { // sudah ada session cart
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if($index == -1){
                array_push($cart, $item);
            } else {
                $cart[$index]['quantity']++;
            }
            return session()->set('cart', $cart);
        } else { // belum ada session cart
            $cart = array($item);
            return session()->set('cart', $cart);
        }
    }

    public function exists($id = null)
    {
        $items = array_values(session('cart'));
		for($i = 0; $i < count($items); $i++){
			if($items[$i]['id'] == $id){
				return $i;
			}
		}
		return -1;
    }

    public function update()
    {
        $cart = array_values(session('cart'));
		for($i = 0; $i < count($cart); $i++){
			$cart[$i]['quantity'] = $_POST['quantity'][$i];
		}
		return session()->set('cart', $cart);
    }

    public function remove($id = null)
    {
        $index = $this->exists($id);
		$cart = array_values(session('cart'));
		$product = $cart[$index]['name'];
		unset($cart[$index]);
		return session()->set('cart', $cart);
    }

    public static function count_totals()
    {
        $total = 0;
		$session = session('cart');
		$items = is_array($session)? array_values($session): array();
		foreach($items as $item){
			$total += $item['price'] * $item['quantity'];
		}
		return $total;
    }

}