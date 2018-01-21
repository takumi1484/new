<?php

namespace App\Http\Controllers;

use App\Shop;
use Request;

class ShopsController extends Controller
{
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }
    public function getIndex()
    {
        // 検索するテキスト取得
        $search = Request::get('s');
        $shops = Shop::query();
        // 検索するテキストが入力されている場合のみ
        if(!empty($search)) {
            $shops->where('chunithm', '=0', '%'.$search.'%');
        }
        $data = $shops->get();

        return view('shop.index', compact('shops','name','s','data'));

    }

}
