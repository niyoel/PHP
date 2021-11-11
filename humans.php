<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
     <?php $a = 10*2;
$a = $a + 37;
echo $a . "<br>";
$team = array(
  0 => 'Cindy', 
  1 => 'Jean', 
  2 => 'Mustapha', 
  3 => 'Pierre', 
  4 => '', 
  5=>'Eric'); 
foreach($team as $b){
  echo $b . "<br>";
}
?>
     
  </body>
</html>
