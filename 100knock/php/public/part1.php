<?php
  include('../config/base.php');
  // var_dump($_POST);

/*
 *  【共通】レビューボタン
 */

  $message1 = '';

  if (@$_POST['review1'] == 'good') {
    $message1 = 'やったね<i class="far fa-laugh"></i>';
  } elseif(@$_POST['review1'] == 'bad') {
    $message1 = 'がーん<i class="far fa-flushed"></i>';
  }

/*
 *  01.「パタトクカシーー」
 */
  $str = 'パタトクカシーー';
  //文字列を配列に変換
  $changeToArray = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
  $count01 = count($changeToArray);
  $result01 = '';
  for ($i=0; $i < $count01; $i+=2) {
    $result01 .= $changeToArray[$i];
  }

/*
 *  02.「パトカー」＋「タクシー」＝「パタトクカシーー」
 */
  $patCar = preg_split("//u",'パトカー', -1, PREG_SPLIT_NO_EMPTY);
  $taxi = preg_split("//u",'タクシー', -1, PREG_SPLIT_NO_EMPTY);
  $count02 = count($patCar);
  $result02 = '';
  for ($i=0; $i < $count02; $i++) {
    $result02 .= $patCar[$i];
    $result02 .= $taxi[$i];
  }

  include(PAGE_ROOT.'part1Html.php');
