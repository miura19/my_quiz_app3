<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'プログラミング',
                'thumbnail' => 'programming.png',
                'sort' => 1
            ],
            [
                'name' => '音楽',
                'thumbnail' => 'music.png',
                'sort' => 2
            ],
            [
                'name' => '世界遺産',
                'thumbnail' => 'history.png',
                'sort' => 3
            ],
            [
                'name' => 'ビジネス',
                'thumbnail' => 'bisiness.png',
                'sort' => 4
            ],
            [
                'name' => '理系学問',
                'thumbnail' => 'sciense.png',
                'sort' => 5
            ],
            [
                'name' => '芸能',
                'thumbnail' => 'entertainment.png',
                'sort' => 6
            ],
            [
                'name' => '文系学問',
                'thumbnail' => 'humanities.png',
                'sort' => 7
            ],
            [
                'name' => 'スポーツ',
                'thumbnail' => 'sports.png',
                'sort' => 8
            ],
            [
                'name' => 'アニメ漫画ゲーム',
                'thumbnail' => 'culture.png',
                'sort' => 9
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
