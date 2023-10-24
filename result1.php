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
    <section class="p-result-hero">
    <div class="hero">
        <div class="hero-top">
           <div class="read">診断結果</div>
        </div>
        <div class="hero-mid">
            <div class="col1">あなたは</div>
            <div class="col2"><span class="under">実質負担<span class="num">0</span>円</span><span class="small">で</span><span class="inv">外</span><span class="inv">壁</span><img src="./images/result-ya.png" alt="" class="ya"><img src="./images/result-ne.png" alt="" class="ne"><span class="small">の</span></div>
            <div class="col3">リフォーム<span class="small">を</span>できる<span class="small">確率が…</span></div>
            <div class="col4"><img src="./images/result-hero-right.png" alt="" class="img1"><span class="under">非常<span class="small">に</span><span class="dot">高</span><span class="dot">い</span></span>です<img src="./images/result-hero-right.png" alt="" class="img2"></div>
        </div>
    </div>
    </section>
    <section class="p-result-read">
        <div class="top">実際の<span class="big">借り換えプラン</span>については<br>
<span class="dot">無</span><span class="dot">料</span><span class="dot">面</span><span class="dot">談</span>にて<span class="span">詳しく</span>お伝え可能です！</div>
        <div class="mid"><span class="under">実質負担<span class="num">0</span><span class="yen">円</span></span>で可能な<br>
        <span class="inv">外</span><span class="inv">壁</span><img src="./images/result-ya.png" alt="" class="ya"><img src="./images/result-ne.png" alt="" class="ne">の<span class="big">リフォーム</span><span class="small">に興味を持たれた方は、</span></div>
        <div class="bot">今すぐ<span class="dot">無</span><span class="dot">料</span><span class="dot">相</span><span class="dot">談</span>に<span class="big">お申し込み</span>ください！</div>
    </section>
  <section class="p-top-contact">
      <div class="container">
        <div class="p-top-contact__charm">
          <div class="text">CONTACT</div>
          <div class="heading">無料相談のお申込みはこちら</div>
        </div>

        <div class="form-box">
          <form action="form.php" method="post">
            <div class="form-group1">
              <label for="name" class="read">お名前<span class="span">必須</span></label>
              <div class="bot">
                <div class="left">
                  <div class="text">姓</div><input type="text" id="name" name="name" placeholder="借り換え">
                </div>
                <div class="right">
                  <div class="text">名</div><input type="text" id="name" name="name" placeholder="太朗">
                </div>
              </div>

            </div>
            <div class="form-group">
              <label for="phone" class="read">電話番号<span class="span">必須</span></label>
              <input type="tel" id="phone" name="phone" placeholder="03000000000">
            </div>
            <div class="form-group">
              <label for="email" class="read">メールアドレス<span class="span">必須</span></label>
              <input type="email" id="email" name="email" placeholder="info@takebi.net" required>
            </div>
            <div class="form-group">
              <label class="read">職業</label>
              <ul class="bot-box">
                <li class="col"><input type="radio" id="occupation-student" name="occupation" value="学生">
                  <label for="occupation-student">サラリーマン</label>
                </li>
                <li class="col"><input type="radio" id="occupation-employee" name="occupation" value="会社員">
                  <label for="occupation-employee">自営業</label>
                </li>
              </ul>

            </div>
            <div class="form-group">
              <label class="read">年齢</label>
              <ul class="bot-box">
                <li class="col">
                  <input type="radio" id="age-under30" name="age" value="">
                  <label for="age-under30">20代</label>
                </li>
                <li class="col">
                  <input type="radio" id="age-under30" name="age" value="">
                  <label for="age-under30">30代</label>
                </li>
                <li class="col">
                  <input type="radio" id="age-under30" name="age" value="">
                  <label for="age-under30">40代</label>
                </li>
                <li class="col">
                  <input type="radio" id="age-under30" name="age" value="">
                  <label for="age-under30">50代</label>
                </li>
                <li class="col">
                  <input type="radio" id="age-under30" name="age" value="">
                  <label for="age-under30">60歳以上</label>
                </li>
              </ul>

            </div>
            <div class="form-group">
              <label class="read" for="income">世帯年収</label>
              <ul class="bot-box">
                <li class="col"><input type="radio" name="income" id="family-single">
                  <label for="family-single">300万円未満</label>
                </li>
                <li class="col"><input type="radio" name="income" id="family-married">
                  <label for="family-married">300万円～400万円</label>
                </li>
                <li class="col"> <input type="radio" name="income" id="family-other">
                  <label for="family-other">400万円～600万円</label>
                </li>
                <li class="col"><input type="radio" name="income" id="family-single">
                  <label for="family-single">600万円～800万円</label>
                </li>
                <li class="col"><input type="radio" name="income" id="family-married">
                  <label for="family-married">800万円以上</label>
                </li>
              </ul>

            </div>
            <div class="form-group">
              <label class="read">家族構成</label>
              <div class="bot-box">
                <div class="col"> <input type="radio" id="family-single" name="family" value="独身">
                  <label for="family-single">独身</label>
                </div>
                <div class="col"><input type="radio" id="family-married" name="family" value="既婚">
                  <label for="family-married">既婚</label>
                </div>
              </div>
              <div class="bot-kid">
                <div class="text">お子様</div><input type="text">
                <div class="text">人</div>
              </div>

            </div>
            <div class="form-group">
              <label class="read" for="loan">住宅ローン</label>
              <div class="blue">お分かりになる範囲でお答えください。</div>
              <div class="bot-loan">
                <div class="col">
                  <div class="col-top">金利</div>
                  <div class="col-bot"><input type="text">
                    <div class="text">%</div>
                  </div>
                </div>
                <div class="col">
                  <div class="col-top">残期間</div>
                  <div class="col-bot"><input type="text">
                    <div class="text">年</div>
                  </div>
                </div>
                <div class="col">
                  <div class="col-top">残債</div>
                  <div class="col-bot"><input type="text">
                    <div class="text">円</div>
                  </div>
                </div>
                <div class="col">
                  <div class="col-top">毎月の支払額</div>
                  <div class="col-bot"><input type="text">
                    <div class="text">円</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="read" for="message">お問い合わせ内容</label>
              <div class="blue">連絡可能な時間帯などあれば、ご記載ください。</div>
              <textarea id="message" name="message" rows="4" placeholder="お問い合わせ、ご質問等" required></textarea>
            </div>
            <div class="form-group">
              <button class="submit" type="submit">送信</button>
            </div>
          </form>
        </div>
      </div>
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