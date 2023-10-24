<!-- <?php include_once("../referer.php") ?> -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- <?php include_once("../tag/head_tag.php") ?> -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/favicon.ico">

  <!-- CSS -->
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./css/reset.css">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&family=Noto+Serif+JP:wght@500;700&family=Oooh+Baby&family=Roboto:wght@300;700&display=swap"
    rel="stylesheet">
  <title>0yen</title>
</head>

<body>
  <!-- <?php include_once("../tag/start_body_tag.php") ?> -->

  <main>
    <section class="p-ask">
      <div class="p-ask-hero">
        <div class="p-ask-hero__top">
          <div class="top">あなたは</div>
          <div class="mid">
            <div class="left"><span class="under">実質負担<span class="num">0</span>円</span>で</div>
            <div class="right"><span class="white">外</span><span class="white">壁</span><span
                class="orange">屋</span><span class="orange">根</span>の</div>
          </div>
          <div class="bot">リフォームができる？</div>
        </div>
        <div class="p-ask-hero__bot">
          <div class="bot">今すぐ<span class="span">無料</span>で<span class="red">診断!</span></div>
        </div>
      </div>
    </section>
    <section class="test">
      <form action="result1.php" method="post">
        <div class="container">
          <div class="test__box">
            <div class="test__box1">
              <div class="top">
                <div class="flex">
                  <p class="flex1 green1">Q1</p>
                  <p class="flex2 gray1">Q2</p>
                  <p class="flex3 gray2">Q3</p>
                  <p class="flex4">Q4</p>
                </div>
              </div>
              <div class="bot">
                <p class="read">現在、千葉県に住んでいますか？</p>
                <div class="check">
                  <div class="left">
                    <input type="radio" id="choice1_1" name="choice1" value="1" />
                    <label for="choice1_1" class="text">はい</label>
                  </div>
                  <div class="right">
                    <input type="radio" id="choice1_2" name="choice1" value="2" checked />
                    <label for="choice1_2" class="text">いいえ</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="test__box2">
              <div class="top">
                <div class="flex">
                  <p class="flex1 gray1">Q1</p>
                  <p class="flex2 green1">Q2</p>
                  <p class="flex3 gray2">Q3</p>
                  <p class="flex4">Q4</p>
                </div>
              </div>
              <div class="bot">
                <p class="read">勤務先は千葉県にありますか？</p>
                <div class="check">
                  <div class="left">
                    <input type="radio" id="choice2_1" name="choice2" value="1" />
                    <label for="choice2_1" class="text">はい</label>
                  </div>
                  <div class="right">
                    <input type="radio" id="choice2_2" name="choice2" value="2" checked />
                    <label for="choice2_2" class="text">いいえ</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="test__box3">
              <div class="top">
                <div class="flex">
                  <p class="flex1 gray1">Q1</p>
                  <p class="flex2 gray2">Q2</p>
                  <p class="flex3 green1">Q3</p>
                  <p class="flex4">Q4</p>
                </div>
              </div>
              <div class="bot">
                <p class="read">住宅ローン以外の借り入れはありますか？（複数チェック可）</p>
                <div class="check1">
                  <div class="left">
                    <input type="checkbox" id="choice3_1" name="choice3" value="1" />
                    <label for="choice3_1" class="text">マイカーローン</label>
                  </div>
                  <div class="right">
                    <input type="checkbox" id="choice3_2" name="choice3" value="2" checked />
                    <label for="choice3_2" class="text">教育ローン</label>
                  </div>
                  <div class="right">
                    <input type="checkbox" id="choice3_3" name="choice3" value="3" />
                    <label for="choice3_3" class="text">リフォームローン</label>
                  </div>
                  <div class="right">
                    <input type="checkbox" id="choice3_4" name="choice3" value="4" />
                    <label for="choice3_4" class="text">その他</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="test__box4">
              <div class="top">
                <div class="flex">
                  <p class="flex1 gray1">Q1</p>
                  <p class="flex2 gray2">Q2</p>
                  <p class="flex3 gray3">Q3</p>
                  <p class="flex4">Q4</p>
                </div>
              </div>
              <div class="bot">
                <p class="read">あなたの年齢を教えてください。</p>
                <div class="check">
                  <div class="left">
                    <input type="radio" id="choice4_1" name="choice4" value="1" />
                    <label for="choice4_1" class="text">20代</label>
                  </div>
                  <div class="right">
                    <input type="radio" id="choice4_2" name="choice4" value="2" checked />
                    <label for="choice4_2" class="text">30代</label>
                  </div>
                  <div class="right">
                    <input type="radio" id="choice4_3" name="choice4" value="3" />
                    <label for="choice4_3" class="text">40代</label>
                  </div>
                  <div class="right">
                    <input type="radio" id="choice4_4" name="choice4" value="4" />
                    <label for="choice4_4" class="text">50代</label>
                  </div>
                  <div class="right">
                    <input type="radio" id="choice4_5" name="choice4" value="5" />
                    <label for="choice4_5" class="text">60歳以上</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="answer" type="submit">診断結果を見る!</button>
        </div>
      </form>
    </section>
    <footer class="p-top-footer">
    <section class="p-top-footer__top">
      <div class="left">
        <img src="./images/footer-logo.png" alt="" class="img">
        <p class="text">株式会社 竹山美装</p>
      </div>
      <div class="right">
        <div class="top">運営会社：株式会社竹山美装<br>
          〒264-0017<br>
          千葉県千葉市若葉区加曾利町1002-5</div>
        <div class="bot">
          <div class="title">会社概要</div>
          <a href="" class="link">- 企業HP<img src="./images/footer-link.png" alt="" class="img"></a>
        </div>
      </div>
    </section>
    <section class="p-top-footer__bot">
      <p class="text">Copyright © TAKEYAMABISOU All Rights Reserved</p>
    </section>
  </footer>
  </main>
  <!-- <?php include_once("../tag/end_body_tag.php") ?> -->
</body>

</html>