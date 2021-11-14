
<?php

$names= array('John', 'jeanne', 'Joan','émile ');
foreach ($names as $name){
	echo ucfirst ($name);
   
}
echo '<hr>';
echo '<pre>';
$names= array('john', 'jeanne', 'joan', 'emile');
var_dump($names);
echo '<hr>';
echo '<pre>';

foreach ($names as $key => $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);
echo '<hr>';
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach($pronouns as $pro){
    echo $pro, ' code','<br>';
}
echo '<hr>';
$i=1;
while ($i <=120) {
echo $i,',';
$i++;
}
echo '<hr>';
for ($i=1; $i <=200; $i++) { 
    echo $i,',';  
}
echo '<hr>';
$first_names= array('kamali', 'claudine', 'brown', 'serge');
foreach($first_names as $first){
    echo $first,',';
}
echo '<hr>';
$countrie = array('Luxembourg','Belgique','France','Australia','Argentina','Belarus','Brasil','Canada','China','Netherland');
?>
<select name="countries">

<?php 
for ($i=0; $i <10 ; $i++) { 
    echo "<option value=".$countrie[$i].">".$countrie[$i]."</option>";
}
?> 
 <option name="countries"> </option>   
</select> 
<?php
echo '<hr>';
$countries = array( 'LU'=>'Luxembourg','BE'=>'Belgique','FR'=>'France','AU'=>'Australia','AR'=>'Argentina','BS'=>'Belarus','BR=>Brasil','CA'=>'Canada','CH'=>'China','NT'=>'Netherland');
?>
<select name="countries">

<?php 

foreach($countries as $key=>$value)
{

 echo "<option value=".$countries[$key].">".$countries[$key]."</option>";
}
?> 
     <option name="countries"> </option>   
</select> 

 