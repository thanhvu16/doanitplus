<?php

use Illuminate\Database\Seeder;

class Categorytableseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'cate_name'=>'iphone',
                'cate_slug'=>'iphone'
            ],
            [
            'cate_name'=>'Sam Sung',
            'cate_slug'=>'SamSung'
             ],
        ];
       DB::table('category')->insert($data);
    }
}
