<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// 1.1 Clean your room Exercise 
$room_is_filthy = true;
switch ($room_is_filthy) {
case true:
	echo "Yuk, Room is dirty : let's clean it up !";
	break;

case false:
	echo "<br>Room is now clean!" ."<br>";
	break;
    default;
    echo "<br>Nothing to do, room is neat.";

}
?>
<br> <br> 

<?php

// 1.2 Clean your room Exercise, improved
$possible_states =array("filthy","health hazard",  "dirty", "clean", "immaculate");

$room_filthiness = $possible_states[0]; 

$possible_states =array("health hazard","filthy",  "dirty", "clean", "immaculate");

$room_filthiness = $possible_states[0]; 
switch ($room_filthiness){
case "health hazard":
	echo "Yuk, Room is Disgusting! Let's clean it up !";
  break;
case "filthy":
	echo "Yuk, Room is unhealth : let's clean it up !";
    break;
case "dirty":
        echo "Yuk, Room is dirty : let's clean it up more!";
        break;
case "caseclean":
        echo "Yuk, Room is clean : nothing to do on it !";
        break;
case "immaculate":
        echo "Yuk, Room is immaculate : let close it !";
        break;
default:
	echo "<br>Nothing to do, room is neat."."<br>";
}
?>
<br> <br> 

<?php
// 2.Display a different greeting message depending on the time of the day.
$now = date("H:i");
switch (true) {
    
 case ($now >= '05:00' and $now <= '09:00'):
echo "Good morning !";
break;
 
 case($now >=  '09:01' and $now <= '12:00'):
        echo "Good day !";
 break;
case($now >= '12:01' and $now <= '16:00'):
            echo "Good afternoon !";   
 break;
case($now >= '16:01' and $now <= '21:00'):
                echo "Good evening !";
 break;
case($now >= '21:01' OR $now <= '04:59'):
                    echo "Good night !";
                  
     }   
                    
     // 3,4,5 "Different greetings according to age" Exercise  + gender+language
   
    ?>
    <br> <br>
    <form method="get" action="">
    <label for="age">Please type your age: </label>
    <input type="text" id="age" name="age" value="" />
    Choose your gender: <input type="radio" value="male" name="gender" checked>male
    <input type="radio" value="female" name="gender" checked>female
    <br>
    Do you speak English ? : <input type="radio" value="yes" name="language" checked>yes
    <input type="radio" value="no" name="language" checked>no
    <br>
    <input type="submit" name="submit" value="Greet me now">
     
</form>
<?php
    if (isset($_GET['age'])&& isset($_GET["gender"]) && isset($_GET["language"]) && isset($_GET["language"])) {
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        $language = $_GET['language'];
       switch (true) {
           
        case ($age > 0 && $age <= 12 && $gender =='female' && $language=='yes'):
        echo 'Hello kiddo girl!';
        break;
        case ($age > 0 && $age <= 12 && $gender =='female' && $language=='no'): 
        echo 'Aloha kiddo girl!';
        break;
        case ($age > 0 && $age <= 12 && $gender == 'male' && $language=='yes'): 
        echo 'Hello kiddo boy!';
        break;
        case ($age > 0 && $age <= 12 && $gender == 'male' && $language=='no'):
        echo 'Aloha kiddo boy!';
        break;
        case ($age > 12 && $age < 18 && $gender == 'female' && $language=='yes'):
        echo 'Hello Miss Teen! !';
        break;
        case ($age > 12 && $age < 18 && $gender =='female'&& $language=='no'):
        echo 'Aloha Miss Teen! !';
        break;
        case ($age > 12 && $age < 18 && $gender =='male'&& $language=='yes'):
        echo 'Hello Mr Teen! !';
        break;
        case ($age > 12 && $age < 18 && $gender =='male'&& $language=='no'):
        echo 'Aloha Mr Teen! !';
        break;
        case ($age >= 18 && $age <= 115 && $gender =='female' && $language=='yes'):
        echo 'Hello old woman  !';
        break;
        case ($age >= 18 && $age <= 115 && $gender =='female' && $language=='no'):
        echo 'Aloha old woman  !';
        break;
        case ($age >= 18 && $age <= 115 && $gender =='male' && $language=='yes'):
        echo 'Hello old man  !';
        break;
        case($age >= 18 && $age <= 115 && $gender =='male' && $language=='no'):
        echo 'Aloha old man  !';
        break;
        case ($age > 115 && $gender =='female'&& $language=='yes'):
        echo ' Hello! my gush are u still alive mrs old woman?';
        break;
        case ($age > 115 && $gender =='female'&& $language=='no'):
        echo ' Aloha! my gush are u still alive mrs old woman?';
        break;
        case ($age > 115 && $gender =='male'&& $language=='yes'):
        echo ' Hello! my gush are u still alive mrs old man?';
        break;
        case ($age > 115 && $gender =='male'&& $language=='no'):
        echo ' Aloha! my gush are u still alive mrs old man?';
        }
    }
    // 6,7 The Girl Soccer team + Achieve the same, without the ELSE.
?>
     <br> <br> 
    <form method="get" action="">
    <label for="name">Please type your Name: </label>
    <input type="text" id="name" name="name" value="" />
    <label for="agee">Please type your Age: </label>
    <input type="text" id="agee" name="agee" value="" />
    Choose your gender: <input type="radio" value="male" name="genderr" checked>male
    <input type="radio" value="female" name="genderr" checked>female
    <br>
    <input type="submit" name="submit" value="Greet me now">
     
    </form>

<?php

if (isset($_GET['agee'])&& isset($_GET['genderr'])){
$agee = $_GET['agee'];
$genderr = $_GET['genderr'];
switch (true) {  
case ($agee >= 21 && $agee <= 40 && $genderr =='female'):
echo 'welcome to the team ', $_GET['name'];
break;
case ($agee < 21 || $agee > 40 || $genderr !='female'):
    echo 'Sorry you dont fit the criteria ', $_GET['name'];
}

}
?>

<br><br>
<!-- 8. "School sucks!" Exercise -->
<form method="get" action="">
<label for="note">Please type student note: </label>
<input type="text" id="note" name="note" value="" />
<input type="submit" name="submit" value="Greet me now">
</form>
<?php
if(isset($_GET['note'])){
    $note = $_GET['note'];
switch (true) {     
    case($note <= 4):
    echo "This work is really bad. What a dumb kid! ";  
    break;
    case($note >=5 && $note <=9):
    break;
    echo "This is not sufficient. More studying is required! "; 
    break;
    case($note ==10):
    echo " barely enough! "; 
    break;
    case($note >=11 && $note <= 14):
    echo 'Not bad!';
    break;
    case($note >=15 && $note <= 18):
    echo 'Bravo, bravissimo!';
    break;
    case($note ==19 || $note== 20):
    echo "Too good to be true : confront the cheater!";
    }
}
?>
</body>
</html>
