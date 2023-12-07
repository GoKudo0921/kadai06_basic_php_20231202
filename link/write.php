<!-- データの登録 -->
<?php
$test = $_POST['test'];
$name = $_POST['name'];
$birthPlace = $_POST['mail'];

// 書き込むデータの内容を整形する。
// "\n"は改行。HTMLの<br>と同じようにtext中で利用されるとtextは改行される。
$task = $test . $name . '/' .  $birthPlace . "\n";
// 第３引数に、FILE_APPENDしないと上書きされちゃう
file_put_contents('data/data.txt', $task, FILE_APPEND);
?>