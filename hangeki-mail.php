<?php
/**
* USAGE
* $ php hangeki-mail.php
* after you edited this script.
*/

/** init */
/** spammer_address array */
$spammer_address = array();
/** type your e-mail address here. */
$your_mail_address = "";

/** add spammer mail address in this array. */
$spammer_address = array('****@***.***','****@***.***');

/** title of mail */
$title ="We detect your mail is spam.";

/** message of mail */
$message = "WE DETECT YOUR MAIL IS SPAM.WE CAN ARREST YOU.IF YOU DO NOT WANNA BE ARRESTED, YOU SHOULD CONTACT ME THE WAY YOU KNOW MY EMAIL ADDRESS, IF YOU KNOQ. BUT WE DETECTED YOUR CRIME ALREDEY.PLEASE THINK IT IN CALM. I DON'T WANNA ATTACK YOU. ITHINK YOU'R ASIAN. I BELEAVE THE ASIAN IS NOT FOOL LIKE YOU. YOU'RE NOW MAKING INFAMOUSE, OF ASIAN. AND YOU... ーーー・　・・ー　・ー　・・ー　・・ーー　・ーー　ー・・・ー　ー・　ー・・　・・ー　・ー・・　・・　・ー　・ー　・・ー・・　・ー・・・　ー・・ー・　・・ー　・ー・ー・ー　ー・・　・ー・ー・　ー・ー・・　ー・　・・　ーー・ー・　ー・　・・・　ーー・ー・　・・　・・ー　ーー・ー・　ー・ー　ーーー　ー・ーー・　ーー　 ";

/** language settings */
mb_language("Japanese");
mb_internal_encoding("UTF-8");

/** message for logging  */
echo "======start=======".time()."\n";
foreach($spammer_address as $val) {
    if (mb_send_mail($val, $title, $message, "From: $your_mail_address")) {
        echo "メールが送信されました。\n";
    } else {
        echo "メールの送信に失敗しました。\n";
    }
}
echo "======end=======\n";
