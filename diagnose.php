<?php
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
  $choice1 = $_POST[ "choice1" ];
  $choice2 = $_POST[ "choice2" ];
  $choice3 = $_POST[ "choice3" ];
  $choice4 = $_POST[ "choice4" ];
  $choice = $choice1 + $choice2 + $choice3 + $choice4;
  //print( $choice );

  if ( $choice == 8 ) {
    $result_img = "result-10";
    $result_color = "51beff";
    $result_title = "「ちょこっと知ってる」";
    $result_text = "人の目を気にして、相手に合わせすぎて、しんどくなる時はありませんか？<br><br>自己理解を深めると、自分の特性を知り、自分を大切にできるので、生きやすくなります！コーチと一緒に自己理解を深めましょう！";

  } elseif ( $choice == 7 ) {
    $result_img = "result-30";
    $result_color = "69D49E";
    $result_title = "「少し知ってる」";
    $result_text = "あなたは、自分の本音に気付かず、相手に合わせすぎて、後々しんどくなる時はありませんか？<br><br>あなたの中に、まだまだ知らない自分が眠っています。自己理解を深めると、自分の特性を知り、自分を大切にできるので、生きやすくなります！コーチと一緒に自己理解を深めましょう！";

  } elseif ( $choice == 6 ) {
    $result_img = "result-50";
    $result_color = "8DE157";
    $result_title = "「まぁまぁ知ってる」";
    $result_text = "あなたは、なんとなく自分のことが分かっているような感じですね！<br><br>さらに自己理解を深めると、周りの人や出来事に振り回されることが減り、 生きやすくなりますよ♪コーチと一緒に自己理解を深めましょう！";

  } elseif ( $choice == 5 ) {
    $result_img = "result-70";
    $result_color = "FFB400";
    $result_title = "「なかなか知ってる」";
    $result_text = "あなたは、自分のことを分かってあげられていますね！<br><br>もっと自分と向き合ってみませんか？ コーチと話すと、さらに新しい自分に出逢えるかもしれません♪";

  } elseif ( $choice == 4 ) {
    $result_img = "result-90";
    $result_color = "FF7500";
    $result_title = "「かなり知ってる」";
    $result_text = "あなたは、自分のことを分かって、ケアしてあげられていますね！その調子です！<br><br>ただ、自己理解に終わりはありません。コーチと話すことで、さらに新しい自分に出逢えるかもしれません♪";
  }
}
?>