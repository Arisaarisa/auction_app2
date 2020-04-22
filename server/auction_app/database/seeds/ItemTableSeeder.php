<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    // use \Illuminate\Support\Facades\DB;

    public function run()
    {
    
        $param = [
            'name' => 'エアマックス 95',
            'description' => '1995年のランニングマックスモデルの復刻版。時代を席巻した名モデルAIR MAX95。当時は斬新でハイテクなルックスがストリートのファッションシーンを席巻しました。',
            'price' => 25000,
            'seller' => 'Taro',
            'email' => 'kazuma@takahashi.org',
            'image' => 'エアマックス95.jpg'
        ];
        DB::table('items')->insert($param);

        # paramに配列を代入
        $param = [

            'name' => 'フットスケープ',
            'description' => '横にシューレースがある斬新なモデル。大切にしていただける方にお譲りします。',
            'price' => 18000,
            'seller' => 'Jiro',
            'email' => 'foo@example.com',
            'image' => 'フットスケイプ.jpg'
        ];
        DB::table('items')->insert($param);

        # DB::table->insertでレコードの登録
        $param = [

            'name' => 'ポンプフューリー',
            'description' => 'ポンプを押すと、空気によってパイプが膨らみ足型にフィットします。',
            'price' => 18000,
            'seller' => 'Teru',
            'email' => 'foo@example.com',
            'image' => 'ポンプフューリー.jpg'
        ];
        DB::table('items')->insert($param);
    }
}
