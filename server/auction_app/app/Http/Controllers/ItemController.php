<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
        // showページへ移動
    public function show(Request $request) {
    $id = $request -> id;
    $item = Item::find($id);
    return view('Items.show',['item' => $item]);
    }

    public function index(Request $request)
    {
        // モデル名::テーブル全件取得
        $items = Item::all();
        // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('Items.index', ['items' => $items]);
    }

    public function new(Request $request)
    {
        return view('items.new');

    }
    public function create(Request $request)
    {
        // インスタンスの作成
        $item = new Item;
        // 値の用意
        
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $item->image_url = $request->image_url;
        $item->timestamps =false;
        // インスタンスに値を設定して保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }
};
