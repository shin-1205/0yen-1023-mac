<?php
header("Location: ./");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myoji = $_POST["myoji"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];
    
    $to = "sillyss5021@gmail.com";  // 送信先のメールアドレスを設定
    $subject = "お問い合わせフォームからのメッセージ";
    $headers = "From: $email";
    
    // 送信された内容を整形してメール本文に含める
    $mailBody = "姓: $myoji\n";
    $mailBody .= "名: $name\n";
    $mailBody .= "Eメール: $email\n";
    $mailBody .= "電話番号: $tel\n";
    $mailBody .= "お問い合わせ内容:\n$message\n";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "メッセージが送信されました。";


    } else {
        echo "送信に失敗しました。";
    }
}
exit; // スクリプトの実行を終了
?>