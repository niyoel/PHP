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
$my_name ='Ellen';
$age = 36;
$eyes_color = 'black';
$family_member = 'kanyange';
$hungry= true;
   ?> 
   <p> <?php echo 'Hi! My name is', $my_name?></p>
   <p> <?php echo 'i am', $age?> years old</p>
   <p>  <?php echo 'my eyes are', $eyes_color?></p>
   <p>  <?php echo 'The first person in my family is', $family_member?></p>
   <p>  <?php echo 'am i hungry?', $hungry?></p>
   
   <!-- if( $temperature >= 15 ) { 
   // code to execute if the condition results TRUE
//    $clothes = "T-shirt";
//    $should_i_wear_a_scarf = false;
//  } else {
   // code to execute if the condition results FALSE
//    $clothes = "Pull-over";
//    $should_i_wear_a_scarf = true;
//  }
 
//  if ($should_i_wear_a_scarf == true){
	 // this is a "fake" function for the sake of the example 
	 // that function is only executed in the condition is true
// 	 grab_scarf_from_door_hanger();
//  }
 // The following function will be executed everytime, 
 // but its $clothes argument changes according to the result
 // of our previous conditional structure
// cover_my_chest_with($clothes);
//   
</body>
</html>