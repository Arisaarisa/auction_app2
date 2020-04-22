<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    
    public function index()
    {
        // モデル名::テーブル全件取得
        $items = Item::all();
        // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('Items.index', ['items' => $items]);
        // return $items->toArray();
    }
    
    public function create()
    {
        return view('Items.create');
        
    }
    public function store(Request $request)
    {
        // インスタンスの作成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $filename = $request->file('image_url')->store('public/image');
        $item->image_url = basename($filename);
        $item->timestamps =false;
        // インスタンスに値を設定して保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }
    // showページへ移動
    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show',['item' => $item]);
    }
};
