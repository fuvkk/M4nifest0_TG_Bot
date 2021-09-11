<?php
include("bot.php");
$update = json_decode(file_get_contents('php://input'));

$userid = $update->CustomField;
$title = $update->Title;
$code = $update->Code;
$name = $update->Name;
$amount = $update->Amount;

SendMessage("1650371607","New payment with the amount $amount You had .
Optional field :‌ $userid");

if ($title == "buy100") {
          $fle = file_get_contents("data/$userid/M4nifest0.txt");
               $getshe = $fle + 100;
                file_put_contents("data/$userid/M4nifest0.txt", $getshe);
	SendMessage($userid,"Chocolate user 🍬
Your purchase has been completed successfully❤️
100 chocolates have been credited to your account😊
Thank you for your purchase 🤚");
}
}
?>
