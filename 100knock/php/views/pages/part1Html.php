<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>言語処理100本ノック - PHP 第1章</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <h1>第1章: 準備運動</h1>
    <form action="part1.php" method="post">
      <ul>
        <li>
          <h2>00.文字列の逆順</h2>
          <p class="question">
            <i class="fas fa-question"></i>：文字列"stressed"の文字を逆に（末尾から先頭に向かって）並べた文字列を得よ。
          </p>
          <p class="answer">
            <i class="fas fa-lightbulb"></i>：<?php echo strrev('stressed'); ?>
          </p>
          <div class="review">
            <button type="submit" name="review1" value="good"><i class="far fa-thumbs-up"></i></button>
            <button type="submit" name="review1" value="bad"><i class="far fa-thumbs-down"></i></button>
            <span class="message"><?php echo $message1; ?></span>
          </div>
        </li>
        <li>
          <h2>01.「パタトクカシーー」</h2>
          <p class="question">
            <i class="fas fa-question"></i>：「パタトクカシーー」という文字列の1,3,5,7文字目を取り出して連結した文字列を得よ。
          </p>
          <p class="answer">
            <i class="fas fa-lightbulb"></i>：<?php echo $result01; ?>
          </p>
          <div class="review">
            <button type="submit" name="review1" value="good"><i class="far fa-thumbs-up"></i></button>
            <button type="submit" name="review1" value="bad"><i class="far fa-thumbs-down"></i></button>
            <span class="message"><?php echo $message1; ?></span>
          </div>
        </li>
        <li>
          <h2>02. 「パトカー」＋「タクシー」＝「パタトクカシーー」</h2>
          <p class="question">
            <i class="fas fa-question"></i>：「パトカー」＋「タクシー」の文字を先頭から交互に連結して文字列「パタトクカシーー」を得よ。
          </p>
          <p class="answer">
            <i class="fas fa-lightbulb"></i>：<?php echo $result02; ?>
          </p>
          <div class="review">
            <button type="submit" name="review1" value="good"><i class="far fa-thumbs-up"></i></button>
            <button type="submit" name="review1" value="bad"><i class="far fa-thumbs-down"></i></button>
            <span class="message"><?php echo $message1; ?></span>
          </div>
        </li>
      </ul>
    </form>
  </body>
</html>
