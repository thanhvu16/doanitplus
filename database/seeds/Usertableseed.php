<?php

use Illuminate\Database\Seeder;

class Usertableseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email' => 'haithanhcx1@gmail.com',
                'password' =>bcrypt('haithanh98'),
                'level' => 1
            ],
            [
                'email' => 'trangnguyen98@gmail.com',
                'password' =>bcrypt('12345678'),
                'level' => 1
            ],
            [
                'email' => 'admin@gmail.com',
                'password' =>bcrypt('12345678'),
                'level' => 1
            ],
        ];
        DB::table('logins')->insert($data);
    }
}
