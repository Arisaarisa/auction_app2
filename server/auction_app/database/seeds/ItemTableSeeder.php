<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'エアマックス 95',
            'description' => '1995年のランニングマックスモデルの復刻版。時代を席巻した名モデルAIR MAX95。当時は斬新でハイテクなルックスがストリートのファッションシーンを席巻しました。',
            'price' => 25000,
            'seller' => 'Taro',
            'email' => 'kazuma@takahashi.org',
            'image_url' => 'https://img21.shop-pro.jp/PA01349/729/product/128749782.jpg?cmsp_timestamp=20180305162210'
        ];
        DB::table('items')->insert($param);

        # paramに配列を代入
        $param = [

            'name' => 'フットスケープ',
            'description' => '横にシューレースがある斬新なモデル。大切にしていただける方にお譲りします。',
            'price' => 18000,
            'seller' => 'Jiro',
            'email' => 'foo@example.com',
            'image_url' => 'https://smlycdn.akamaized.net/data/product2/2/e4e8cc92ab955a67a2d3aeb98eb5541475fd7ca3_l.jpg'
        ];
        DB::table('items')->insert($param);

        # DB::table->insertでレコードの登録
        $param = [

            'name' => 'ポンプフューリー',
            'description' => 'ポンプを押すと、空気によってパイプが膨らみ足型にフィットします。',
            'price' => 18000,
            'seller' => 'Teru',
            'email' => 'foo@example.com',
            'image_url' => 'http://image.rakuten.co.jp/atmos-girls/cabinet/reebok/v47514-1.jpg'
        ];
        DB::table('items')->insert($param);

    }
}
