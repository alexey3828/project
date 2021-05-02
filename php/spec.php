<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<blockquote> 
 <?php
 /* Получаем текущий час в виде строки от 00 до 23
 и приводим строку к целому числу от 0 до 23
 */
$hour = (int) strftime("%H");
$welcome = "";
if ($hour>0 and $hour<6) {
    $welcome = "Good Night!";
}
elseif ($hour>6 and $hour<12) {
    $welcome = "Good Morning!";
}
elseif ($hour>12 and $hour<18) {
    $welcome = "Good Afternoon!";
}
elseif ($hour >18 and $hour<23){
    $welcome = "Good Eveneing!";
}
else {
    $hour = "Good Night!";
}
 $day = strftime("%d");
 $mon = strftime("%B");
 $year = strftime("%Y"); 
 $one = "1";
 $two = "2";
 
 echo "Today  ${day} number ${mon} month  ${year} year"; ?> 
</blockquote>
<h3>Зачем мы ходим в 
школу?</h3>
<h1><?=$welcome ?> friend!</h1>
    <?php
    
        echo $year;
    ?>
</body>
</html>