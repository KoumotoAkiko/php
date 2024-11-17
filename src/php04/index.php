<?php
// ↓のファイルを読み込む
require_once('config/status_codes.php');
// ↓配列をランダムに４つ格納（値じゃなくキーがランダム
$random_indexes=array_rand($status_codes,4);
// ↓ランダムの中から特定の要素を取り出す
foreach($random_indexes as $index){
$options[]=$status_codes[$index];
}
// ↓optionの中から１つ正解を決める
$question=$options[mt_rand(0,3)];


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <!-- ここまでが全体の箱（赤色） -->
    <link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/index.css">
<!-- 上３つがCSSファイルの読み込み -->
    
</head>
<body>
<!-- ヘッダー（青色）の作成 -->
 <header class="header">
  <div class="header__inner">
    <a class="header__logo" href="/php04">Status Code Quiz
    </a>
</div>
</header>

<!-- header以外を一つの枠組みにする（緑色） -->
<main>
 <div class="quiz__content">
  <div class="question">
    <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
    <p class="question__text">
<!-- ↓ステータスコードの説明文表示 -->
      <?php echo $question['description'] ?>
   </p>

  </div>
<!-- フォーム（ピンク部）の作成 -->
 <form class="quiz-form" action="result.php" method="post">
   <!-- ↓解答となるデータの送信 -->
 <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
   <div class="quiz-form__item">
<!-- ↓選択肢となる説明文の表示 -->
    <?php foreach($options as $option):?>
     <div class="quiz-form__group">
<!-- ↓inputタグと紐付けinputにチェックが付けられる -->
      <input class="quiz-form__radio" id="<?php echo $option['code']?>" type="radio" name="option" value="<?php echo $option['code']?>">
      <label class="quiz-form__label" for="<?php echo $option['code']?>">
     <?php echo $option['code']?>
    </label>
  </div>
  <?php endforeach; ?>
 </div>
 <div class="quiz-form__button">
  <button class="quiz-form__button-submit" type="submit">回答</button>
</div>
</form>
</div>
</main>
</body>
</html>