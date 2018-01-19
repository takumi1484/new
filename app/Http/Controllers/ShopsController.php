<?php

namespace App\Http\Controllers;

use App\Shop;

class ShopsController extends Controller
{
    protected $shop;
 
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }
 
    public function getIndex()
    {
        $shops = $this->shop->all();
        return view('shop.index', compact('shops'));
    }

}
