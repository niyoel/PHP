<?php
$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;
echo '<hr>';
$str= 'This is going to be shuffled !';
$str= explode(" ", $str);

foreach ($str as $word){
	
	echo str_shuffle($word)." ";
}

///////////////////////////////////////////////
function sanitize( $input ){
	//	argument manipulation to clean them up
	return strip_tags( trim( $input) );	
}

if (isset($_POST) && !empty($_POST) ){

	// input sanitization
	$name = sanitize( $_POST['name'] );
	$email = sanitize( $_POST['email'] );

	// validation...
	
}
echo '<hr>';

function capitalise($word){
    return ucwords($word);
}

$name='laie';
echo capitalise($name);

echo '<hr>';

function ourtime($now){
return date($now);
}
$year= 'Y ';
$j='j G:i:s';
echo ourtime($year);
echo '<hr>';
echo ourtime($j);

echo '<hr>';

function sum($a,$b){
    if(is_int($a)==false || is_int($b)==false)
    {
    echo 'Error:argument is the not a number!';
    }
    else return $a+$b;
}
$x=5;
$y=6;
echo sum($x,$y);
echo '<hr>';
function acronym($b){

$words = explode(" ", $b);
$acronym = "";

foreach ($words as $w) {
  $acronym .=  ucwords($w[0]);

}
 return($acronym);
}
 $sentence="In code we trust";
 echo acronym($sentence);
 echo '<hr>';
function replace($str){
$word = str_split($str);
$word = explode(",",'ae');
$replace = explode(",",'æ');
$result= str_replace($word, $replace, $str);
return $result;
}
 $wrd="microsphaera";
 echo replace($wrd);
 echo '<hr>';

 function replace1($str){
    $word = str_split($str);
    $word = explode(",",'æ');
    $replace = explode(",",'ae');
    $result= str_replace($word, $replace, $str);
    return $result;
    }
     $wrd="microsphæra";
     echo replace1($wrd);
     echo '<hr>';
function decapitalise($wrd){
return strtolower($wrd);
}
$word="STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
    echo  decapitalise($word);
    ////////////////////////////////////////////////////////////

    echo '<hr>';
function volume($r,$h){
    $volume = $r * $r * 3.14 * $h * (1/3);
    return $volume;
}
$a=5;
$b=2;
$x=3;
$y=4;
echo 'The volume of a cone which ray is ', $a ,' and height is ', $b, ' equal to: ', volume($a,$b), '<br>';
echo 'The volume of a cone which ray is ', $x ,' and height is ', $y ,' equal to: ', volume($x,$y), '<br>';

    ?>






