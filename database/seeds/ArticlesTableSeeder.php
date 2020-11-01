<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'キアヌの投稿',
            'member_id'=>1,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'ジョニーの投稿',
            'member_id'=>2,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'けそポテトの投稿',
            'member_id'=>3,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'はねむーんの投稿',
            'member_id'=>4,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'キアヌの投稿2',
            'member_id'=>1,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'ジョニーの投稿2',
            'member_id'=>2,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'けそポテトの投稿2',
            'member_id'=>3,
        ];
        DB::table('articles')->insert($param);
        $param=[
            // 'id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'content'=>'はねむーんの投稿2',
            'member_id'=>4,
        ];
        DB::table('articles')->insert($param);
    }
}