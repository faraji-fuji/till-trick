<?php
// class cart
// properties: cart_array
// methods add_to_cart, remove_from_cart, print_cart
class cart
{
    public $cart_array = [];

    public function add_to_cart($key, $value)
    {
        if (array_key_exists($key, $this->cart_array)) {
            $val = $this->cart_array[$key];
            $new_val = $val + $value;
            $this->cart_array[$key] = $new_val;
        } else {
            $this->cart_array[$key] = $value;
        }
    }

    public function remove_from_cart($key)
    {
        unset($this->cart_array[$key]);
    }

    public function print_cart()
    {
        var_dump($this->cart_array);
    }
}
