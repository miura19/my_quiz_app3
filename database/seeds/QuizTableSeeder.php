<?php

use Illuminate\Database\Seeder;
use App\Quiz;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizs =  [
            [
                'question' => 'Googleが作ったフレームワークはどれ？',
                'category_id' => '1',
                'answer1' => 'Vue.js',
                'answer2' => 'AngularJS',
                'answer3' => 'React',
                'answer4' => 'jQuery',
                'answer' => 'AngularJS',
                'description' => 'AngularJSですよー'
            ],
            [
                'question' => 'HTTP通信を行うためによく使われるライブラリはどれ？',
                'category_id' => '1',
                'answer1' => 'axios',
                'answer2' => 'Lodash',
                'answer3' => 'Moment.js',
                'answer4' => 'D3.js',
                'answer' => 'axios',
                'description' => '他の選択肢は全然Ajaxのライブラリではないですよ。'
            ],
            [
                'question' => 'JavaScript以外のプログラミング言語でフロントエンドを構築するための技術は何？',
                'category_id' => '1',
                'answer1' => 'web3.0',
                'answer2' => 'NoCode',
                'answer3' => 'WebAssembly',
                'answer4' => 'PWA',
                'answer' => 'web3.0',
                'description' => 'ちょっと難しかったかなぁ？'
            ],
            [
                'question' => '次のうち、最終的にJavaScriptにコンパイルされる言語でないものはどれ？',
                'category_id' => '1',
                'answer1' => 'TypeScript',
                'answer2' => 'CoffeScript',
                'answer3' => 'Dart',
                'answer4' => 'PureScript',
                'answer' => 'Dart',
                'description' => 'マジむずいよ'
            ],
            [
                'question' => '次のうち、TypeScriptの特徴でないものはどれ？',
                'category_id' => '1',
                'answer1' => '性的型付け言語である',
                'answer2' => 'enumが使える',
                'answer3' => 'JavaScriptのスーパーセットである',
                'answer4' => 'オブジェクト志向的書き方ができる',
                'answer' => '性的型付け言語である',
                'description' => '性的とかw'
            ],
            [
                'question' => '一般的にギターには何本の弦が張られている？',
                'category_id' => '2',
                'answer1' => '4本',
                'answer2' => '3本',
                'answer3' => '5本',
                'answer4' => '6本',
                'answer' => '6本',
                'description' => '4本はベースかな。3本は三味線かな。'
            ],
            [
                'question' => '3弦の開放弦の音は何？',
                'category_id' => '2',
                'answer1' => 'C',
                'answer2' => 'E',
                'answer3' => 'D',
                'answer4' => 'G',
                'answer' => 'G',
                'description' => 'ソの音だね。'
            ],
            [
                'question' => 'ベース音と5度の2音だけを出すコードのことを何という？',
                'category_id' => '2',
                'answer1' => 'アッパーストラクチャー',
                'answer2' => 'テンションコード',
                'answer3' => 'パワーコード',
                'answer4' => 'トライアドコード',
                'answer' => 'パワーコード',
                'description' => 'ロックでよく使われるけど、くるりのボーカルの人は使わないよ。'
            ],
            [
                'question' => '布袋寅泰やJudy&MaryのTAKUYAが使うギターの種別は何？',
                'category_id' => '2',
                'answer1' => 'ストラトキャスター',
                'answer2' => 'テレキャスター',
                'answer3' => 'レスポール',
                'answer4' => 'アコースティック',
                'answer' => 'テレキャスター',
                'description' => 'まぁアコギも使うんだろうけどさ。'
            ],
            [
                'question' => 'ピッキングせずに指を弦に押さえつけるだけで音を出す奏法を何という？',
                'category_id' => '2',
                'answer1' => 'ハンマリングオン',
                'answer2' => 'プリングオフ',
                'answer3' => 'チョーキング',
                'answer4' => 'アーミング',
                'answer' => 'ハンマリングオン',
                'description' => 'プリングと合わせて覚えよう。'
            ],
            [
                'question' => '世界で最初の世界遺産といえば？',
                'category_id' => '3',
                'answer1' => 'イエローストーン国立公園',
                'answer2' => 'シミエン国立公園',
                'answer3' => 'ナハニ国立公園',
                'answer4' => 'ヨセミテ国立公園',
                'answer' => 'イエローストーン国立公園',
                'description' => '1978年に登録されたアメリカの世界遺産です。'
            ],
            [
                'question' => 'ロシアにある透明度が世界一の湖といえば？',
                'category_id' => '3',
                'answer1' => 'ウユニ塩湖',
                'answer2' => 'レトバ湖',
                'answer3' => 'モレーン湖',
                'answer4' => 'バイカル湖',
                'answer' => 'バイカル湖',
                'description' => '世界最古で深さも世界一です。いつか見に行きたいです。'
            ],
            [
                'question' => '日本の広島県にある世界遺産といえば原爆ドームですが、広島県のもう一つの世界遺産といえば？',
                'category_id' => '3',
                'answer1' => '三峯神社',
                'answer2' => '熱田神宮',
                'answer3' => '出雲大社',
                'answer4' => '厳島神社',
                'answer' => '厳島神社',
                'description' => '1996年に登録されました。近くをシカが歩いています。'
            ],
            [
                'question' => '「イノベーション」の説明として正しいものを選べ',
                'category_id' => '4',
                'answer1' => '2声体の鍵盤楽曲',
                'answer2' => '手を加えて良くすること',
                'answer3' => '人が何かする際の動機づけ',
                'answer4' => '新しい技術や考え方を取り入れて社会的に大きな変化を起こすこと',
                'answer' => '新しい技術や考え方を取り入れて社会的に大きな変化を起こすこと',
                'description' => 'その他はインベンション・リノベーション・モチベーションの説明だったよ。'
            ],
            [
                'question' => '次のうち「貸借対照表」の説明はどれ？',
                'category_id' => '4',
                'answer1' => '企業のある一定時点における資産、負債、純資産の状態を表すもの',
                'answer2' => '企業のある一定期間における収益と費用の状態を表すもの',
                'answer3' => '会計期間における資金の増減、つまり収入と支出を表示する',
                'answer4' => '純資産の変動状況を表すもの',
                'answer' => '企業のある一定時点における資産、負債、純資産の状態を表すもの',
                'description' => '難しいね・・。'
            ],
            [
                'question' => '次のうち「資産」でないものはどれ？',
                'category_id' => '4',
                'answer1' => '現金',
                'answer2' => '手形',
                'answer3' => '借入金',
                'answer4' => '貸付金',
                'answer' => '借入金',
                'description' => '会計のお話です。'
            ],
        ];

        foreach($quizs as $quiz) {
            Quiz::create($quiz);
        }
    }
}
