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
    public function getIndex1()
    {
        // 検索するテキスト取得
        $cb1 = Request::get('chunithm');
        $cb2 = Request::get('maimai');
        $cb3 = Request::get('voltex');
        $cb4 = Request::get('jubeat');
        $cb5 = Request::get('coaster');

        $shops = Shop::query();
        // 検索するテキストが入力されている場合のみ
        if(!empty($cb1)) {
            $shops->where('chunithm','!=','0');
        }
        if(!empty($cb2)) {
            $shops->where('maimai','!=','0');
        }
        if(!empty($cb3)) {
            $shops->where('voltex','!=','0');
        }
        if(!empty($cb4)) {
            $shops->where('jubeat','!=','0');
        }
        if(!empty($cb5)) {
            $shops->where('coaster','!=','0');
        }
        $data = $shops->get();

        return view('shop.index', compact('shops','name','chunithm','maimai','voltex','jubeat','coaster','data'));

    }
    public function getIndex2()
    {
        $shops = $this->shop->all();
        return view('show.index', compact('shops'));
    }

}
