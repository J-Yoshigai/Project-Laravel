<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro@yamada.jp',
            'age' => 12,
            'sex' => '男',
            'detail' => '問い合わせ',
            ];
            DB::table('people')->insert($param);
    }
}
