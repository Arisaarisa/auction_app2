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
        //画像ファイルが生成される&pathにフォルダのパスが記述される
        $filename = $request->file('image')->store('public/image');
        $item->image = basename($filename);

        $item->timestamps =false;

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

    public function edit($id)
    {

        $item = Item::find($id);
        // idを見つけたらedit.blade.phpに飛ばす
        return view('Items.edit', ['item' => $item]);
    }

    public function update(Request $request, $id) 
    {
        // ここはidで探してt持ってくる以外は新規登録とおなじ
        $item = Item::find($id);
        // これ使いたいけどうまくいかない
        // $item = $request->all();
        // $item->file($item)->save();
        // return redirect('items');
        // 値の用意
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        // 画像ファイルが生成される&pathにフォルダのパスが記述される
        $filename = $request->file('image')->store('public/image');
        $item->image = basename($filename);

        $item->timestamps = false;
        // 保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }

    public function delete($id)
    {

        $item = Item::find($id);
        // idを見つけたらdelete.blade.phpに飛ばす
        return view('Items.delete', ['item' => $item]);
    }

    public function destroy($id) 
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');

    }
};

