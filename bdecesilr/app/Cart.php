<?php

namespace App;
//Cart but not on the database, it will only keep the items for one connexion.
class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function _construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = ['qty' =>0, 'Product_price' => $item->Product_price, 'item'=> $item];
        if ($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['Product_price'] = $item->Product_price * $storedItem['qty'];
        $this->items[$id] = $storedItem;    
        $this->totalQty++; 
        $this->totalPrice += $item->Product_price;
    } 
}