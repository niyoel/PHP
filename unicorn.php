<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
Are you a: <input type="radio" value="human" name="kind" checked>human
    <input type="radio" value="cat" name="kind" checked>cat
    <input type="radio" value="unicorn" name="kind" checked>unicorn
    <br>
    <input type="submit" name="submit" value="send">
    <br><br>
<?php
if(isset($_GET['kind'])){
$kind = $_GET['kind'];

$img= ($kind=='human')? "<img src='https://media0.giphy.com/media/wviTaGMb9a6rZnbjqV/200w.webp?cid=ecf05e473eueg9zxrpuckmekdx3n06z1ceeldsyrvg7cppv4&rid=200w.webp&ct=g'/>":
(($kind=='cat')? "<img src='https://media4.giphy.com/media/ICOgUNjpvO0PC/200.webp?cid=ecf05e47z95pa6jrip0cgl5cyfuswt2jlvpu2ij9dlu5bqkb&rid=200.webp&ct=g'/>":"<img src='https://media3.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif?cid=ecf05e475rm0kh3t6g6xnc5yhfevqcdntk7bblemjx8p38dz&rid=giphy.gif&ct=g'/>");
echo $img;
}
?>

</body>
</html>