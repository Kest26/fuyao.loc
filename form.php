<?php

header('Access-Control-Allow-Origin: *');

$EmailTo = "Konstantin-G-Baranov@yandex.ru";
$EmailFrom = 'price@fuyao.ru';
$Subject = "Заявка на получение прайс-листа fuyao.ru";

$message = print_r($_POST,true);

$success = mail($EmailTo, $Subject, $message, "From: <$EmailFrom>");
if($success) { echo '<script>
  location.href= "/success.html";
</script>'; }
else{  echo '<script>
  location.href= "/error.html";
</script>'; }

?>