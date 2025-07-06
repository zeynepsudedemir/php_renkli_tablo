<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Odevi</title>
</head>
<body>
<?php
$a = rand(1, 30);
$b=rand(1, 30); 
function tekcift($sayi){
    if($sayi%2==0){
        return "Cift";
    }else{
        return "Tek";
    }
}
echo"<table border=1 align=center>";
echo  $a.  " --- " . $b;
for($i=0;$i<=$a;$i++){
    echo "<tr>";
    for($j=0;$j<=$b;$j++){
        $r=rand(0,255);
        $g=rand(0,255);
        $bb=rand(0,255);
        $sayi=rand(1, 100);
        $tc=tekcift($sayi);
        echo "<td style='background-color:rgb($r,$g,$bb);'>$sayi $tc</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
