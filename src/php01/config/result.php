<?php
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$choices=htmlspecialchars($_POST['choices'],ENT_QUOTES);
$number=htmlentities($_POST['number'],ENT_QUOTES);

echo "お名前は" . $name . "<br />";
echo "ご注文商品は" . $choices . "<br />";
echo "注文数は" . $number ;